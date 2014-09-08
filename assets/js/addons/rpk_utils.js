!function ($) {

    "use strict"; // jshint ;_;

    $(function () {
        $.fn.toggleText = function (value1, value2) {
            return this.each(function () {
                var $this = $(this),
                text = $this.html();

                if (text.indexOf(value1) > -1)
                    $this.html(text.replace(value1, value2));
                else
                    $this.html(text.replace(value2, value1));
            });
        };
        $.fn.serializeObject = function()
        {
            var o = {};
            var a = this.serializeArray();
            $.each(a, function() {
                if (o[this.name] !== undefined) {
                    if (!o[this.name].push) {
                        o[this.name] = [o[this.name]];
                    }
                    o[this.name].push(this.value || '');
                } else {
                    o[this.name] = this.value || '';
                }
            });
            return o;
        };
        $.ajaxWithRedirect = function (options) {
            "use strict";
            var deferred = $.Deferred(),
            successHandler,
            xhr;

            // force no-cache
            options.cache = false;

            // get a copy of the success handler...
            successHandler = options.success;

            // ... and replace it with this one
            options.success = function (data) {
                var contentType = xhr.getResponseHeader("Content-Type"),
                performRedirect = true,
                redirectUrl = null,
                args = [].slice.call(arguments, 0),
                json;

                // If response isn't there or isn't json,
                // skip all the redirect logic
                //                console.log(data);
                //                console.log((/json/i).test(contentType));
                if( data && (/json/i).test(contentType) ) {
                    // If json was requested, and json received, jQuery will
                    // have parsed it already. Otherwise, we'll have to do it
                    if( options.dataType === 'json' ) {
                        redirectUrl = data.RedirectUrl;
                    } else {
                        try {
                            json = $.parseJSON(data);
                            redirectUrl = json.RedirectUrl;
                        } catch(e) {
                        // no-op
                        }
                    }

                    // check the redirect url
                    if( redirectUrl && typeof redirectUrl === 'string') {
                        // Is there a beforeRedirect handler?
                        if( typeof options.beforeRedirect === 'function' ) {
                            // pass all the arguments to the beforeRedirect handler
                            performRedirect = options.beforeRedirect.apply(null, args);
                        }

                        // unless strictly false, go ahead with the redirect
                        if( performRedirect !== false ) {
                            if(redirectUrl == '#')
                            {
                                location.reload();
                            }
                            else
                            {
                                location.replace(redirectUrl);
                            }
                            // and stop here. No success and/or deferred handlers
                            // will be called since we're redirecting anyway
                            return;
                        }
                    }
                }
                else
                {
                //                    console.log('no redirect');
                }

                // no redirect; forward everything to the success handler(s)
                if( typeof successHandler === 'function' ) {
                    successHandler.apply(null, args);
                    deferred.resolve.apply(null, args);
                }
            };

            // Make the request
            xhr = $.ajax(options);

            // Forward the deferred promise method(s)
            xhr.fail(deferred.reject);
            xhr.progress(deferred.notify);

            // Replace the ones already on the xhr obj
            deferred.promise(xhr);

            return xhr;
        };
    })

}(window.jQuery);