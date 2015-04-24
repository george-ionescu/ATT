//  ----------------------------------------------------------------------------
//
//  bootstrap-typeahead.js
//
//  Twitter Bootstrap Typeahead Plugin
//  v2.1
//
//  Author
//  ----------
//  Ionut Andrei Baches
//  ionut.baches@yahoo.com
//
//  FORKED from:
//  https://github.com/tcrosen/twitter-bootstrap-typeahead
//  v1.2.2
//  Modified by:
//  Terry Rosen
//  tcrosen@gmail.com | @rerrify | github.com/tcrosen/
//
//
//  Description
//  ----------
//  Custom implementation of Twitter's Bootstrap Typeahead Plugin
//  http://twitter.github.com/bootstrap/javascript.html#typeahead
//
//
//  Requirements
//  ----------
//  jQuery 1.7+
//  Twitter Bootstrap 2.0+
//
//
// Options
// -------
// defaults:
//			source: [], //the source of plugin [it can be an array , an object or a function that will return an array or an object] note: overrides ajax option
//        	items: 10, //no of items to be shown once
//        	menu: '<ul class="typeahead dropdown-menu"></ul>', //template for whole listing
//        	item: '<li><a href="#"></a></li>', //template for one item
//        	//display: 'name', //the object porperty which value will be set to html element value
//        	val: 'id',
//        	//itemSelected: function () { }, // callback function runned after one item is selected [it can also be defined using "updater" alias] note: if both itemSelected and updater are defined itemSelected takes priority
//			//searchIn : [] //array or string representing the object property against the matcher will run
//        	minLength :2, //min no of typedin chars that will trigger autocomplete action
//        	ajax: { // it is overrided by source if present
//            url: null,
//            timeout: 300,
//            method: 'post',
//            triggerLength: 3, //overrides minLength
//            loadingClass: null,
//            displayField: null,
//            preDispatch: null,
//            preProcess: null
//        	}
//
//	method overrides
//        	eventSupported
//        	grepper
//        	highlighter
//        	lookup
//        	matcher
//        	render
//        	select
//        	sorter
//        	source
//			updater
//			itemSelected
//
//
//  ----------------------------------------------------------------------------

!
function ($) {

    "use strict";

    //------------------------------------------------------------------
    //
    //  Constructor
    //
    var Typeahead = function (element, options) {
        this.$element = $(element);
        this.options = $.extend(true, {}, $.fn.typeahead.defaults, options);
        this.$menu = $(this.options.menu).appendTo('body');
        this.shown = false;

        // Method overrides
        this.eventSupported = this.options.eventSupported || this.eventSupported;
        this.grepper = this.options.grepper || this.grepper;
        this.highlighter = this.options.highlighter || this.highlighter;
        this.lookup = this.options.lookup || this.lookup;
        this.matcher = this.options.matcher || this.matcher;
        this.render = this.options.render || this.render;
        this.select = this.options.select || this.select;
        this.sorter = this.options.sorter || this.sorter;
        this.source = this.options.source || this.source;
		this.updater = this.options.updater || this.updater;

        if (!this.source.length) {
            var ajax = this.options.ajax;

            if (typeof ajax === 'string') {
                this.ajax = $.extend({}, $.fn.typeahead.defaults.ajax, {
                    url: ajax
                });
            } else {
                this.ajax = $.extend({}, $.fn.typeahead.defaults.ajax, ajax);
            }

            if (!this.ajax.url) {
                this.ajax = null;
            }
        }

        this.listen();
    }

    Typeahead.prototype = {

        constructor: Typeahead,

        //=============================================================================================================
        //
        //  Utils
        //
        //=============================================================================================================

        //------------------------------------------------------------------
        //
        //  Check if an event is supported by the browser eg. 'keypress'
        //  * This was included to handle the "exhaustive deprecation" of jQuery.browser in jQuery 1.8
        //
        eventSupported: function(eventName) {
            var isSupported = (eventName in this.$element);

            if (!isSupported) {
                this.$element.setAttribute(eventName, 'return;');
                isSupported = typeof this.$element[eventName] === 'function';
            }

            return isSupported;
        },

        //=============================================================================================================
        //
        //  AJAX
        //
        //=============================================================================================================

        //------------------------------------------------------------------
        //
        //  Handle AJAX source
        //
        ajaxer: function () {
            var that = this,
            query = that.$element.val();

            if (query === that.query) {
                return that;
            }

            // Query changed
            that.query = query;

            // Cancel last timer if set
            if (that.ajax.timerId) {
                clearTimeout(that.ajax.timerId);
                that.ajax.timerId = null;
            }

            if (!query || query.length < that.ajax.triggerLength) {
                // Cancel the ajax callback if in progress
                if (that.ajax.xhr) {
                    that.ajax.xhr.abort();
                    that.ajax.xhr = null;
                    that.ajaxToggleLoadClass(false);
                }

                return that.shown ? that.hide() : that;
            }

            // Query is good to send, set a timer
            that.ajax.timerId = setTimeout(function() {
                $.proxy(that.ajaxExecute(query), that);
            }, that.ajax.timeout);

            return that;
        },

        //------------------------------------------------------------------
        //
        //  Execute an AJAX request
        //
        ajaxExecute: function(query) {
            this.ajaxToggleLoadClass(true);

            // Cancel last call if already in progress
            if (this.ajax.xhr) this.ajax.xhr.abort();

            var params = this.ajax.preDispatch ? this.ajax.preDispatch(query) : {
                query : query
            };
            var jAjax = (this.ajax.method === "post") ? $.post : $.get;
            this.ajax.xhr = jAjax(this.ajax.url, params, $.proxy(this.ajaxLookup, this));
            this.ajax.timerId = null;
        },

        //------------------------------------------------------------------
        //
        //  Perform a lookup in the AJAX results
        //
        ajaxLookup: function (data) {
            var items;

            this.ajaxToggleLoadClass(false);

            if (!this.ajax.xhr) return;

            if (this.ajax.preProcess) {
                data = this.ajax.preProcess(data);
            }

            // Save for selection retreival
            this.ajax.data = data;

            items = this.grepper(this.ajax.data);

            if (!items || !items.length) {
                return this.shown ? this.hide() : this;
            }

            this.ajax.xhr = null;

            return this.render(items.slice(0, this.options.items)).show();
        },

        //------------------------------------------------------------------
        //
        //  Toggle the loading class
        //
        ajaxToggleLoadClass: function (enable) {
            if (!this.ajax.loadingClass) return;
            this.$element.toggleClass(this.ajax.loadingClass, enable);
        },

        //=============================================================================================================
        //
        //  Data manipulation
        //
        //=============================================================================================================

        //------------------------------------------------------------------
        //
        //  Search source
        //
        lookup: function (event) {
            var that = this,
            items;

            if (that.ajax) {
                that.ajaxer();
            }
            else {
                /*that.query = that.$element.val();

                if (!that.query) {
                    return that.shown ? that.hide() : that;
                }

                items = that.grepper(that.source);

                if (!items || !items.length) {
                    return that.shown ? that.hide() : that;
                }

                return that.render(items.slice(0, that.options.items)).show();*/

                that.query = that.$element.val();

                if (!that.query || that.query.length < that.options.minLength) {
                    return that.shown ? that.hide() : that;
                }

                items = $.isFunction(that.source) ? that.source(that.query, $.proxy(that.process, that)) : that.source;

                return items ? that.process(items) : that;
            }
        },

        process: function (items) {
            var that = this,items;

            items = $.grep(items, function (item) {
                if(that.options.searchIn){
					if($.isArray(that.options.searchIn)){
						var res = jQuery.grep(that.options.searchIn, function (element, index) {
							return that.matcher(item[element], item);
						});
						return (res.length != 0);
					}else{
						return that.matcher(item[that.options.searchIn], item);
					}
				}else if(that.options.display){
                    return that.matcher(item[that.options.display], item);
                }else{
                    return that.matcher(item);
                }
            });

            items = this.sorter(items);

            if (!items.length) {
                return this.shown ? this.hide() : this;
            }

            return this.render(items.slice(0, this.options.items)).show();
        },

        //------------------------------------------------------------------
        //
        //  Filters relevent results
        //
        grepper: function(data) {
            var that = this,items;

            if (data && data.length) {
				if(that.options.display && !data[0].hasOwnProperty(that.options.display)){
					return null;
				}
            }

            items = $.grep(data, function (item) {
				if(that.options.display){
                    return that.matcher(item[that.options.display], item);
                }else{
                    return that.matcher(item);
                }
            });

            return this.sorter(items);
        },

        //------------------------------------------------------------------
        //
        //  Looks for a match in the source
        //
        matcher: function (item) {
            if(item){
                return ~item.toLowerCase().indexOf(this.query.toLowerCase());
            }else{
                return false;
            }
        },

        //------------------------------------------------------------------
        //
        //  Sorts the results
        //
        sorter: function (items) {
            var sort = this.$element.data('sort');

            if(typeof sort != 'undefined' && !sort){
                return items;
            }

            var that = this,
				beginswith = [],
				caseSensitive = [],
				caseInsensitive = [],
				item;

			if(that.options.display){
				while (item = items.shift()) {
					if (!item[that.options.display].toLowerCase().indexOf(this.query.toLowerCase())) {
						beginswith.push(item);
					}
					else if (~item[that.options.display].indexOf(this.query)) {
						caseSensitive.push(item);
					}
					else {
						caseInsensitive.push(item);
					}
				}
			}else{
				while (item = items.shift()) {
					if (!item.toLowerCase().indexOf(this.query.toLowerCase())) beginswith.push(item);
					else if (~item.indexOf(this.query)) caseSensitive.push(item);
					else caseInsensitive.push(item);
				}
			}
            return beginswith.concat(caseSensitive, caseInsensitive);
        },

        //=============================================================================================================
        //
        //  DOM manipulation
        //
        //=============================================================================================================

        //------------------------------------------------------------------
        //
        //  Shows the results list
        //
        show: function () {
            var pos = $.extend({}, this.$element.offset(), {
                height: this.$element[0].offsetHeight
            });

            this.$menu.css({
                top: pos.top + pos.height,
                left: pos.left
            });

            this.$menu.show();
            this.shown = true;

            return this;
        },

        //------------------------------------------------------------------
        //
        //  Hides the results list
        //
        hide: function () {
            this.$menu.hide();
            this.shown = false;
            return this;
        },

        //------------------------------------------------------------------
        //
        //  Highlights the match(es) within the results
        //
        highlighter: function (item) {
            item = ucwords((item + '').toLowerCase());
            var query = this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, '\\$&');
            return item.replace(new RegExp('(' + query + ')', 'ig'), function ($1, match) {
                return '<strong>' + match + '</strong>';
            });
        },

        //------------------------------------------------------------------
        //
        //  Renders the results list
        //
        render: function (items) {
            var that = this;
            var subitemIcon = this.$element.data('subitem-icon');
            if(typeof subitemIcon != 'undefined' ){
            //do nothing
            }else{
                subitemIcon = '';
            }
            items = $(items).map(function (i, item) {
                var inputs = {};
                if (typeof that.options.val === 'string') {
                    inputs = item[that.options.val];
                }
                else {
                    $.each(that.options.val, function (i, attr) {
                        inputs[attr] = item[attr];
                    });
                }
                i = $(that.options.item).attr('data-value', JSON.stringify(inputs));
                var ancor = i.find('a');
				if(that.options.display){
					ancor.html(that.highlighter(item[that.options.display]));
				}else{
					ancor.html(that.highlighter(item));
				}
                if(subitemIcon.length > 0){
                    if(item.hasOwnProperty('SubItem')){
                        if(item.SubItem > 0){
                            $(i[0]).addClass('subitem');
                            ancor.css('background', 'url('+subitemIcon+') no-repeat left');
                        }
                    }else if(item.hasOwnProperty('Subitem')){
                        if(item.Subitem > 0){
                            $(i[0]).addClass('subitem');
                            ancor.css('background', 'url('+subitemIcon+') no-repeat left');
                        }
                    }else if(item.hasOwnProperty('subitem')){
                        if(item.subitem > 0){
                            $(i[0]).addClass('subitem');
                            ancor.css('background', 'url('+subitemIcon+') no-repeat left');
                        }
                    }else if(item.hasOwnProperty('subItem')){
                        if(item.subItem > 0){
                            $(i[0]).addClass('subitem');
                            ancor.css('background', 'url('+subitemIcon+') no-repeat left');
                        }
                    }
                }
                return i[0];
            });

            items.first().addClass('active');
            this.$menu.html(items);
            return this;
        },

        //------------------------------------------------------------------
        //
        //  Item is selected
        //
        select: function () {
			var $selectedItem = this.$menu.find('.active');
            this.$element.val($selectedItem.text()).change();
            //rpk extends
            var itemSelected = this.options.itemSelected;
			if(!itemSelected || typeof itemSelected === 'undefined' ){
				itemSelected = this.updater;
			}
            if (typeof itemSelected === 'string') {
                var fn = window[itemSelected];
                if(typeof fn === 'function'){
                    fn($selectedItem, JSON.parse($selectedItem.attr('data-value')), $selectedItem.text());
                }
            } else {
                itemSelected($selectedItem, JSON.parse($selectedItem.attr('data-value')), $selectedItem.text());
            }
            //this.options.itemSelected($selectedItem, JSON.parse($selectedItem.attr('data-value')), $selectedItem.text());
            return this.hide();
        },

		updater: function (item) {
			//return item;
		},

        //------------------------------------------------------------------
        //
        //  Selects the next result
        //
        next: function (event) {
            var active = this.$menu.find('.active').removeClass('active');
            var next = active.next();

            if (!next.length) {
                next = $(this.$menu.find('li')[0]);
            }

            next.addClass('active');
        },

        //------------------------------------------------------------------
        //
        //  Selects the previous result
        //
        prev: function (event) {
            var active = this.$menu.find('.active').removeClass('active');
            var prev = active.prev();

            if (!prev.length) {
                prev = this.$menu.find('li').last();
            }

            prev.addClass('active');
        },

        //=============================================================================================================
        //
        //  Events
        //
        //=============================================================================================================

        //------------------------------------------------------------------
        //
        //  Listens for user events
        //
        listen: function () {
            this.$element
				.on('focus',    $.proxy(this.focus, this))
				.on('blur',     $.proxy(this.blur, this))
				.on('keypress', $.proxy(this.keypress, this))
				.on('keyup', 	$.proxy(this.keyup, this));

            if (this.eventSupported('keydown')) {
                this.$element.on('keydown', $.proxy(this.keypress, this));
            } else {
                this.$element.on('keypress', $.proxy(this.keypress, this));
            }

            this.$menu
				.on('click', $.proxy(this.click, this))
				.on('mouseenter', 'li', $.proxy(this.mouseenter, this))
				.on('mouseleave', 'li', $.proxy(this.mouseleave, this));
        },

		//------------------------------------------------------------------
        //
        //  Handles a key being raised up
        //
        keyup: function (e) {
            e.stopPropagation();
            e.preventDefault();

            switch (e.keyCode) {
                case 40: // down arrow
				case 38: // up arrow
				case 16: // shift
				case 17: // ctrl
				case 18: // alt
					break;
                case 9: // tab
				case 13: // enter
                    if (!this.shown) {
                        return;
                    }
                    this.select();
                    break;
                case 27: // escape
					if (!this.shown) return;
					this.hide();
					break;

				default:
					this.lookup();
            }
        },

		focus: function (e) {
			this.focused = true;
		},

        //------------------------------------------------------------------
        //
        //  Handles a key being pressed
        //
        keypress: function (e) {
            e.stopPropagation();
            if (!this.shown) {
                return;
            }

            switch (e.keyCode) {
                case 9:
                // tab
                case 13:
                // enter
                case 27:
                    // escape
                    e.preventDefault();
                    break;
                case 38:
                    // up arrow
                    e.preventDefault();
                    if (e.type=='keydown') this.prev();
                    break;

                case 40:
                    // down arrow
                    e.preventDefault();
                    if (e.type=='keydown') this.next();
                    break;
            }
        },

        //------------------------------------------------------------------
        //
        //  Handles cursor exiting the textbox
        //
		blur: function (e) {
			this.focused = false;
			if (!this.mousedover && this.shown) this.hide();
		},
        /*blur: function (e) {
            var that = this;
            e.stopPropagation();
            e.preventDefault();
            setTimeout(function () {
                if (!that.$menu.is(':focus')) {
                    that.hide();
                }
            }, 150)
        },*/

        //------------------------------------------------------------------
        //
        //  Handles clicking on the results list
        //
		click: function (e) {
			e.stopPropagation();
			e.preventDefault();
			this.select();
			this.$element.focus();
		},

        //------------------------------------------------------------------
        //
        //  Handles the mouse entering the results list
        //
        mouseenter: function (e) {
			this.mousedover = true;
            this.$menu.find('.active').removeClass('active');
            $(e.currentTarget).addClass('active');
        },

		mouseleave: function (e) {
			this.mousedover = false;
			if (!this.focused && this.shown) this.hide();
		}
    }

    //------------------------------------------------------------------
    //
    //  Plugin definition
    //

	var old = $.fn.typeahead;

    $.fn.typeahead = function (option) {
        return this.each(function () {
            var $this = $(this),
            data = $this.data('typeahead'),
            options = typeof option === 'object' && option;

            if (!data) {
                $this.data('typeahead', (data = new Typeahead(this, options)));
            }

            if (typeof option === 'string') {
                data[option]();
            }
        });
    }

    //------------------------------------------------------------------
    //
    //  Defaults
    //
    $.fn.typeahead.defaults = {
        source: [],
        items: 10,
        menu: '<ul class="typeahead dropdown-menu"></ul>',
        item: '<li><a href="#"></a></li>',
        //display: 'name',
        val: 'id',
        //itemSelected: function () { },
		//searchIn : []
        minLength :2,
        ajax: {
            url: null,
            timeout: 300,
            method: 'post',
            triggerLength: 3,
            loadingClass: null,
            displayField: null,
            preDispatch: null,
            preProcess: null
        }
    }

    $.fn.typeahead.Constructor = Typeahead;

	/* TYPEAHEAD NO CONFLICT
	 * =================== */

	$.fn.typeahead.noConflict = function () {
		$.fn.typeahead = old;
		return this;
	}

    //------------------------------------------------------------------
    //
    //  DOM-ready call for the Data API (no-JS implementation)
    //
    //  Note: As of Bootstrap v2.0 this feature may be disabled using $('body').off('.data-api')
    //  More info here: https://github.com/twitter/bootstrap/tree/master/js
    //
    $(function () {
        $('body').on('focus.typeahead.data-api', '[data-provide="typeahead"]', function (e) {
            var $this = $(this);

            if ($this.data('typeahead')) {
                return;
            }

            e.preventDefault();
            $this.typeahead($this.data());
        })
    });

} (window.jQuery);
