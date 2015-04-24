!function ($) {

    "use strict"; // jshint ;_;
    
    $(function () {
        // Bootstrap Hack by Ionut Baches
        var _old_toggle = $.fn.button.prototype.constructor.Constructor.prototype.toggle;
        $.fn.button.prototype.constructor.Constructor.prototype.toggle = function(){
            _old_toggle.apply(this);
            var $el = this.$element;
            var $parent = $el.parent('[data-toggle="buttons-radio"]')
            var target = $parent ? $parent.data('target') : undefined;
            var value = $el.attr('value');
            if(target && value){
                $('#'+target).val(value); 
            }
            if ($el.attr('class-toggle') != undefined){
                $parent.find('.btn').each(function() {
                $(this).removeClass($(this).attr('class-toggle'));
                });
                $el.addClass(this.$element.attr('class-toggle'));   
            }
        }
    })

}(window.jQuery);