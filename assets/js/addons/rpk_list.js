var rpklistallowsave = true;
$(function() {
    //---------------------CLOSE JQUERY MODAL WHEN CLICK OUTSIDE
    $(document.body).on("click", function(e) {
        if ($(e.target).hasClass('btn-elfinder') || $(e.target).hasClass('elfinder') || $(e.target).parents('.btn-elfinder, .elfinder').length != 0) {
            if ($(e.target).parents('.elfinder-upload-dialog-wrapper') != 0) {
                return true;
            }
        }
        $.each($(".dialogelfinder:visible"), function() {
            $(this).dialogelfinder("close");
        });
        return true;
    });
    //---------------------CRUD OPERATIONS
    $(document.body).on('click', '.rpklist-save', rpklistsave);
    $(document.body).on('click', '.rpklist-saveclose', {
        exit: true
    }, rpklistsave);
    $(document.body).on('click', '.rpklist-delete', rpklistdelete);
    function rpklistsave(e) {
        try {
            var form = $(this).parents('form:first');
            exit = false;
            if (validateParams(e.data, false)) {
                if (e.data !== null) {
                    if (e.data.hasOwnProperty('exit')) {
                        exit = e.data.exit;
                    }
                }
            }
            form.submit(function(e) {
                if (!rpklistallowsave)
                    return false;
                rpklistallowsave = false;
                if (!exit) {
                    $(document.body).off('click', '.rpklist-save', rpklistsave);
                } else {
                    $(document.body).off('click', '.rpklist-saveclose', {
                        exit: true
                    }, rpklistsave);
                }
                var form = $(this);
                var url = form.attr('action');
                $.ajax({
                    url: url,
                    type: "post",
                    data: form.serialize()
                })
                    .done(function() {
                    })
                    .fail(function() {
                        $('#RpkListNotification').notify({
                            fadeOut: {
                                enabled: true,
                                delay: 1000
                            }
                            ,
                            type: 'error'
                            ,
                            message: {
                                html: 'error occured'
                            }
                        }).show();
                        return false;
                    })
                    .always(function(result) {
                        var message = result.Message;
                        var status = result.Status;
                        var type = 'success';
                        var delay = 1000;
                        if(status != 1){
                            type = 'error';
                            delay = 3000;
                        }
                        if(message.length <1){
                            message = 'Operation completed succesfully!';
                        }
                        if (!exit) {
                            var modal = form.parents('.modal');
                            if (modal.length > 0) {
                                refresh(modal.data('target-url'), modal.data('target'));
                            }
                            $('#RpkListNotification').notify({
                                fadeOut: {
                                    enabled: true,
                                    delay: delay
                                }
                                ,
                                type: type
                                ,
                                message: {
                                    html: message
                                }
                            }).show();
                        } else {
                            setTimeout(function() {
                                historyBack(form, true, message);
                            }, 210);
                        }
                        setTimeout(function() {
                            rpklistallowsave = true;
                        }, 210);
                        return false;
                    });
                e.preventDefault();
                e.stopPropagation();
                return false;
            });
        } catch (err) {
            return reportError(err);
        }
    }
    function rpklistdelete(e) {
        try {
            var form = $(this).parents('form:first');
            var url = $(this).data('url');
            $.ajax({
                url: url,
                type: "post"
            })
                .done(function() {
                    return false;
                })
                .fail(function() {
                    $('#RpkListNotification').notify({
                        fadeOut: {
                            enabled: true,
                            delay: 1000
                        }
                        ,
                        type: 'error'
                        ,
                        message: {
                            html: 'error occured'
                        }
                    }).show();
                    return false;
                })
                .always(function() {
                    location.reload();
                    /*refresh(form.data('target-url'),form.data('target'));
                     $('#RpkListNotification').notify({
                     fadeOut: {enabled: true, delay: 1000}
                     ,type: 'success'
                     ,message: { html: 'Operation completed succesfully!' }
                     }).show();
                     return false;*/
                });
            e.preventDefault();
            e.stopPropagation();
            return false;
        } catch (err) {
            return reportError(err);
        }
    }
    //----------------------END CRUD OPERATIONS

    //----------------------FILTER OPERATIONS
    $(document.body).on('click', '.rpklist-sort', function(e) {
        var url = $(this).data('url');
        //var target = $(this).parents('.panel-column');
        var target = $(this).parents($(this).data('target'));
        $.getJSON(url,
            {
                target: target.attr('id'),
                sort: $(this).data('sort'),
                sortType: $(this).data('sort-type')
            })
            .done(function(result) {
                target.empty().html(result.Object);
            })
            .fail(function() {
                $('#RpkListNotification').notify({
                    fadeOut: {
                        enabled: true,
                        delay: 1000
                    }
                    ,
                    type: 'error'
                    ,
                    message: {
                        html: 'error occured'
                    }
                }).show();
                return false;
            })
            .always(function(result) {
                target.empty().html(result.Object);
            });
        e.preventDefault();
    });

    $(document.body).on('click', '.rpklist-filter', function(e) {
        //var target = $(this).parents('.panel-column');
        //var target = $(this).parents($(this).data('target'));
        var target = $('#' + $(this).closest('form').parent().attr('id'));
        var url = $(this).data('url');
        var form = $(this).parents('form:first');
        var data = form.serializeArray();
        data.push({
            name: "target",
            value: target.attr('id')
        })
        $.getJSON(url, $.param(data))
            .done(function(result) {
                target.empty().html(result.Object);
            })
            .fail(function() {
                $('#RpkListNotification').notify({
                    fadeOut: {
                        enabled: true,
                        delay: 1000
                    }
                    ,
                    type: 'error'
                    ,
                    message: {
                        html: 'error occured'
                    }
                }).show();
                return false;
            })
            .always(function(result) {
                target.empty().html(result.Object);
            });
        e.preventDefault();
    });

    $(document.body).on('click', '.rpklist-filter-remove', function(e) {
        var url = $(this).data('url');
        var target = $(this).parents($(this).data('target'));
        $(this).next().val(null);
        var form = $(this).parents('form:first');
        var data = form.serializeArray();
        data.push({
            name: "target",
            value: target.attr('id')
        })
        //console.log(data);
        $.getJSON(url, $.param(data))
            .done(function(result) {
                target.empty().html(result.Object);
            })
            .fail(function() {
                $('#RpkListNotification').notify({
                    fadeOut: {
                        enabled: true,
                        delay: 1000
                    }
                    ,
                    type: 'error'
                    ,
                    message: {
                        html: 'error occured'
                    }
                }).show();
                return false;
            })
            .always(function(result) {
                target.empty().html(result.Object);
            });
        e.preventDefault();
    });
    //----------------------END FILTER OPERATIONS

    $(document.body).on('click', '.rpklist-filter-icon', function(e) {
        e.preventDefault();
        $(this).next().show().focus();
    });
    $(document.body).on('keyup', '.rpklist-filter-box', function(e) {
        //var rex = new RegExp($(this).val(), 'i');
        if (e.keyCode === 27) {
            $(this).parent().hide();
        }
        if (e.keyCode == 13) {
            $(this).next().next().trigger('click');
        }
        e.preventDefault();
        e.stopPropagation();
    });
    $(document.body).on('click', '.search-cancel', function(e) {
        e.preventDefault();
        $(this).prev().attr('value', '');
        $(this).next().trigger('click');
    });

    document.body.onkeypress = function(e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
        }
    }

    $(document.body).on('click', '.rpklist-submit', function(e) {
        this.form.submit();
    });

    $(document.body).on('click', '.rpklist-edit-tree, .rpklist-add-tree, .modal .rpklist-edit, .modal .rpklist-add', function(e) {
        /*var modal = $('#RpkListModal');
         if(modal.length == 0){
         $(document.body).append('<div id="RpkListModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="RpkListModalLabel" aria-hidden="true" style="display: none;"><div class="modal-dialog"><div class="modal-body"></div></div></div>');
         }*/
        var form = $(this).parents('form:first');
        $('#RpkListModal').data('url', $(this).data('url')).data('target-url', form.data('url')).data('target', form.data('target')).modal('show');
        e.preventDefault();
        e.stopPropagation();
    });
    $(document.body).ready(function() {
        //$('.rpk-back').click(function(){
        $(document.body).on('click', '.rpk-back', function(e) {
            historyBack($(this));
            return false;
        });
    });
    $(document.body).on('click', '.tableCheckAll input:checkbox', function(e) {
        var checkedStatus = this.checked;
        $(".table").find("tbody tr td:first-child input:checkbox").each(function() {
            this.checked = checkedStatus;
            if (checkedStatus == this.checked) {
                $(this).closest('.checker > span').removeClass('checked');
                $(this).closest('table tbody tr').removeClass('thisRow');
            }
            if (this.checked) {
                $(this).closest('.checker > span').addClass('checked');
                $(this).closest('table tbody tr').addClass('thisRow');
            }
        });
    });
    $(document).on('click', '.tableAction, .rpklist-sync , .rpklist-get, .rpklist-set', function(e) {
        //$.post($(this).attr('href'))
        //execAction(this,e);
    });

    //var columnNumber;
    var panel = $('div.panel');
    var innerPanel = $('div.inner-panel');
    var columnNumber = $('.inner-panel').children('div').length;

    function adjustPanelWidth() {
        var panelW = panel.width();

        //        if ((columnNumber <= 3) && (panelW >= 1170)) {
        //            panel.css('overflow-x','hidden');
        //            $('ul.listing').css('height','503px');
        //           innerPanel.css('min-width','1170px');
        //        }
        if ((columnNumber <= 3) && (panelW < 1170)) {
            panel.css('overflow-x', 'scroll');
            $('ul.listing').css('height', '524px');
        }
        if (columnNumber > 3) {
            panel.css('overflow-x', 'scroll');
            $('ul.listing').css('height', '524px');
            innerPanel.css('min-width', '1950px');
        }
        if (columnNumber == 4) {
            innerPanel.css('min-width', '1560px');
            panel.css('overflow-x', 'scroll');
        }
        if (columnNumber == 5) {
            innerPanel.css('min-width', '1950px');
        }
        if (columnNumber == 6) {
            innerPanel.css('min-width', '2340px');
        }

    }

    $(document.body).on('click', '.rpklist-load-children', function(e) {
        var form = $(this).parents('form:first');
        var targetName = $(this).data('target');
        var target = $(targetName);
        var url = $(this).data('url');
        $.ajax({
            url: url,
            data: form.serialize(),
            type: "post"
        })
            .done(function() {
            })
            .fail(function() {
                $('#RpkListNotification').notify({
                    fadeOut: {
                        enabled: true,
                        delay: 1000
                    }
                    ,
                    type: 'error'
                    ,
                    message: {
                        html: 'error occured'
                    }
                }).show();
                return false;
            })
            .always(function(data) {
                if (data.Status == 0) {
                    var msg = data.Message;
                    if (msg.length == 0) {
                        msg = 'error occured';
                    }
                    $('#RpkListNotification').notify({
                        fadeOut: {
                            enabled: true,
                            delay: 1000
                        },
                        type: 'error',
                        message: {
                            html: 'error occured'
                        }
                    }).show();
                } else if (data.Status == 1) {
                    if (target.length == 0) {
                        var newID = targetName.substr(1);
                        $('#RpkListInnerPanel').append('<div class="panel-column" id="' + newID + '"></div>');
                        setTimeout(function() {
                            panel.animate({
                                scrollLeft: 390
                            }, 600);
                        }, 200);
                        columnNumber++;
                        adjustPanelWidth();
                        $("#" + newID).empty().html(data.Object);
                    } else {
                        target.nextAll().empty();
                        target.empty().html(data.Object);
                    }
                    //parentClicked.parent().children('li.selected').removeClass('selected');
                    //parentClicked.addClass('selected');//inverzeste list-itemul parinte
                }
                return false;
            });
        e.preventDefault();
        return false;
    });

    $(document.body).on('click', '.rpklist-load-child', function(e) {
        var url = $(this).data('url');
        var targetName = $(this).data('target');
        var target = $(targetName);
        var parentClicked = $(this).parents('.expandable');
        if (target.length == 0) {
            var newID = targetName.substr(1);
            $('#RpkListInnerPanel').append('<div class="panel-column" id="' + newID + '"></div>');

            setTimeout(function() {
                panel.animate({
                    scrollLeft: 390
                }, 600);
            }, 200);
            columnNumber++;
            adjustPanelWidth();
            $("#" + newID).empty().html('loading...');
            target = $("#" + newID);
        } else {
            target.nextAll().empty();
            target.empty().html('loading...');
        }
        $.post(url)
            .done(function() {
            })
            .fail(function() {
                $('#RpkListNotification').notify({
                    fadeOut: {
                        enabled: true,
                        delay: 1000
                    }
                    ,
                    type: 'error'
                    ,
                    message: {
                        html: 'error occured'
                    }
                }).show();
                return false;
            })
            .always(function(data) {
                if (data.Status == 0) {
                    var msg = data.Message;
                    if (msg.length == 0) {
                        msg = 'error occured';
                    }
                    $('#RpkListNotification').notify({
                        fadeOut: {
                            enabled: true,
                            delay: 1000
                        },
                        type: 'error',
                        message: {
                            html: 'error occured'
                        }
                    }).show();
                } else if (data.Status == 1) {
                    /*if (target.length == 0){
                     var newID = targetName.substr(1);
                     $('#RpkListInnerPanel').append('<div class="panel-column" id="'+newID+'"></div>');
                     
                     setTimeout(function(){ panel.animate({scrollLeft: 390}, 600); }, 200);
                     columnNumber++;
                     adjustPanelWidth();
                     $("#"+newID).empty().html(data.Object);
                     }else{
                     target.nextAll().empty();
                     target.empty().html(data.Object);
                     }*/
                    target.nextAll().empty();
                    target.empty().html(data.Object);
                    parentClicked.parent().children('li.selected').removeClass('selected');
                    parentClicked.addClass('selected');//inverzeste list-itemul parinte
                }
                return false;
            });
        e.preventDefault();
        e.stopPropagation();
    });

    $(document.body).on('click', '.rpklist-map', function(e) {
        $('#RpkMapModal').modal('show');
        e.preventDefault();
        e.stopPropagation();
    });

    $(document.body).ready(function() {
        /*if(isPluginLoaded('gmap')){
         //$('#rpk_map').gmap();
         $('#RpkMapModal').on('shown',function(){
         if(!$(this).hasClass('map-loaded')){
         $('#rpk_map').gmap('option', 'center', new google.maps.LatLng(53.0000, 9.0000));
         $('#rpk_map').gmap('refresh');
         $(this).addClass('map-loaded');
         }
         });
         }*/
        $('#RpkMapModal').on('shown',function(){
            if(!$(this).hasClass('map-loaded')){
                initializeRpkMap($('#rpk_map'),undefined,undefined,8,undefined,true);
                $(this).addClass('map-loaded');
                //$(this).find('#RpkMapGeocodeAddress').focus();
            }
            //google.maps.event.trigger(rpk_map, "resize");
        });
    });

    $(document).on('click', '.rpklist-enable', function(e) {
        $(this).addClass('item-in-progress');
    });
    $(document).on('click', '.rpklist-disable', function(e) {
        $(this).addClass('item-in-progress');
    });
    $(document).on('click', '.rpklist-sync', function(e) {
        $(this).addClass('item-in-progress');
    });
    $(document).on('click', '.rpklist-sync-tree', function(e) {
        $(this).addClass('item-in-progress');
    });
    
    $(document).on('click','#RpkMapGeocodeAddressButton',function(e){
        $(this).attr("disabled", "disabled");
        e.preventDefault();
        var action = $(this).data('action');
        //var args = $(this).data('args');
        execFn(action,window,'RpkMapGeocodeAddress',undefined,undefined,'Latitude','Longitude');
        $(this).removeAttr("disabled");
    });

});

function checkStatus(url, progressId) {
    try {
        $.periodic({
            period: 2000,
            decay: 1.2,
            max_period: 60000
        }, function() {
            $.ajax({
                periodic: this,
                type: "GET",
                url: url
            }).always(function(result, status) {
                var response = result.Object;
                if (response.status == 0) {
                    $('#' + progressId + 'Info').hide();
                    $('#' + progressId).hide();
                    this.periodic.cancel();
                } else {
                    $('#' + progressId).show();
                    $('#' + progressId + 'Value').width(response.completed + '%');
                    $('#' + progressId + 'LabelText').html('running ' + response.action + ':');
                    $('#' + progressId + 'LabelValue').html(response.completed + ' %' + ' Completed');
                }
            });
        });

        return true;
    } catch (err) {
        return reportError(err);
    }
}
$(document.body).ready(function() {
    $('#RpkListModal').on('show', function() {
        /*var url = $(this).data('url');
        $.getJSON(url).always(function(data){
            var modalBody = $('#RpkListModal .modal-body');
            modalBody.empty().html(data.Object);
        });*/
    });
});
function execAction(el, e) {
    try {
        var form = $(el).parents('form:first');
        //var target = $(el).data('target');
        var target = '#' + form.parent().attr('id');
        var url = $(el).data('url');
        if (!validateParams([form, target, url])) {
            throw "invalid parameters in execAction";
        }
        var method = "post";
        if ($(el).hasClass('rpklist-edit-tree') || $(el).hasClass('rpklist-add-tree')
            || ($(el).hasClass('rpklist-edit') && inModal(el)) || ($(el).hasClass('rpklist-add') && inModal(el)))
        {
            $('#RpkListModal')
                .data('url', url)
                .data('target-url', form.data('url'))
                .data('target', form.data('target'))
                .empty();
            $.getJSON(url).done().fail().always(function(data) {
                if (data.Status == 1) {
                    $('#RpkListModal').html(data.Object);
                }
            });
            $('#RpkListModal').modal('show');
            if (isset(e)) {
                e.preventDefault();
                e.stopPropagation();
            }
            return false;
        }
        if ($(el).hasClass('rpklist-add') || $(el).hasClass('rpklist-edit')
            || $(el).hasClass('rpklist-view') || $(el).hasClass('rpklist-duplicate')) {
            method = "get";
            window.location.href = url;
            return true;
        }
        $.ajax({
            url: url,
            data: form.serialize(),
            type: method
        })
            .done(function() {
            })
            .fail(function() {
                $('#RpkListNotification').notify({
                    fadeOut: {
                        enabled: true,
                        delay: 1000
                    }
                    ,
                    type: 'error'
                    ,
                    message: {
                        html: 'error occured'
                    }
                }).show();
                return false;
            })
            .always(function(data) {
                if (data.Status == 0) {
                    var msg = data.Message;
                    if (msg.length == 0) {
                        msg = 'error occured';
                    }
                    $('#RpkListNotification').notify({
                        fadeOut: {
                            enabled: true,
                            delay: 1000
                        }
                        ,
                        type: 'error'
                        ,
                        message: {
                            html: msg
                        }
                    }).show();
                } else if (data.Status == 1) {
                    var targetUrl = form.data('url');
                    if (targetUrl.length > 0) {
                        refresh(targetUrl, target);
                    } else {
                        location.reload();
                    }
                }
                return false;
            });
        if (isset(e)) {
            e.preventDefault();
        }
        return false;
    } catch (err) {
        return reportError(err);
    }
}

function inModal(el) {
    try {
        var modal = $(el).parents('.modal');
        if (modal.length != 0) {
            return true;
        } else {
            return false;
        }
    } catch (err) {
        return reportError(err);
    }
}

var rpk_geocoder;
var rpk_map;
var rpk_markers = [];
/**
 * 
 * @param string selector/jQuery object container
 * @param decimal lat
 * @param decimal lng
 * @param int zoom
 * @returns true on success false on failed (if console is available the error will be shown in console.error)
 */
function initializeRpkMap(container, lat, lng, zoom, mapTypeId, attachMarker, allowMore) {
    try{
        rpk_geocoder = new google.maps.Geocoder();
        if(validateParams(container) && (lat=validateParams(lat,44.43305160387214)) 
            && (lng=validateParams(lng,26.13864228220598)) && (zoom=validateParams(zoom,8))
            && (mapTypeId=validateParams(mapTypeId,google.maps.MapTypeId.ROADMAP))){
            var latlng = new google.maps.LatLng(lat, lng);
            var mapOptions = {
                zoom: zoom,
                center: latlng,
                mapTypeId: mapTypeId
            };
            if(container instanceof jQuery){
                rpk_map = new google.maps.Map(container[0], mapOptions);
            }else{
                rpk_map = new google.maps.Map(document.getElementById(container), mapOptions);
            }
            if(validateParams(attachMarker,false)){
                google.maps.event.addListener(rpk_map, 'click', function(event) {
                    allowMore = validateParams(allowMore,false);
                    //addMarker(location, map, container, draggable, clear)
                    addMarker(event.latLng, rpk_map, rpk_markers, true, !allowMore,undefined,undefined,'Latitude','Longitude');
                });
            }
        }
        return true;
    }catch(e){
        reportError(e);
    }
    
}

function codeRpkAddress(addressInput, operation, callback, lat, lng) {
    try{
        if(validateParams(addressInput)){
            if(addressInput instanceof jQuery){
                var address = addressInput.val().trim();
            }else{
                var address = document.getElementById(addressInput).value.trim();
            }
        }
        if(address.length > 1){
            rpk_geocoder.geocode({'address': address}, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if(validateParams(lat,false) && validateParams(lng,false)){
                        if(lat instanceof jQuery){
                            lat.val(results[0].geometry.location.lat());
                        }else{
                            document.getElementById(lat).value = results[0].geometry.location.lat();
                        }
                        if(lng instanceof jQuery){
                            lng.val(results[0].geometry.location.lng());
                        }else{
                            document.getElementById(lng).value = results[0].geometry.location.lng();
                        }
                    }
                    rpk_map.setCenter(results[0].geometry.location);
                    var marker = addMarker(results[0].geometry.location, rpk_map, rpk_markers, true, true);
                    if((operation=validateParams(operation,'dragend'))){
                        if(!validateParams(callback,false)){
                            callback = function(a){
                                if(validateParams(lat,false) && validateParams(lng,false)){
                                    if(lat instanceof jQuery){
                                        lat.val(a.latLng.lat());
                                    }else{
                                        document.getElementById(lat).value = a.latLng.lat();
                                    }
                                    if(lng instanceof jQuery){
                                        lng.val(a.latLng.lng());
                                    }else{
                                        document.getElementById(lng).value = a.latLng.lng();
                                    }
                                }
                            };
                        }
                       google.maps.event.addListener(marker, operation, callback);
                    }
                } else {
                     throw 'Geocode was not successful for the following reason: ' + status;
                }
            });
        }
    }catch(e){
        reportError(e);
    }
}

// Add a marker to the map and push to the array.
function addMarker(location, map, container, draggable, clear, operation, callback, lat, lng) {
    try{
        if(validateParams(clear,true)){
            deleteMarkers(container);
        }
        if ((map = validateParams(map, rpk_map))) {
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                draggable: validateParams(draggable,false)
            });
            if(validateParams(lat,false) && validateParams(lng,false)){
                if(lat instanceof jQuery){
                    lat.val(location.lat());
                }else{
                    document.getElementById(lat).value = location.lat();
                }
                if(lng instanceof jQuery){
                    lng.val(location.lng());
                }else{
                    document.getElementById(lng).value = location.lng();
                }
            }
            if((operation=validateParams(operation,'dragend'))){
                if(!validateParams(callback,false)){
                    callback = function(a){
                        if(validateParams(lat,false) && validateParams(lng,false)){
                            if(lat instanceof jQuery){
                                lat.val(location.lat());
                            }else{
                                document.getElementById(lat).value = location.lat();
                            }
                            if(lng instanceof jQuery){
                                lng.val(location.lng());
                            }else{
                                document.getElementById(lng).value = location.lng();
                            }
                        }
                    };
                }
               google.maps.event.addListener(marker, operation, callback);
            }
            if (!validateParams(container,false)) {
                container = rpk_markers;
            }
            if (container instanceof Array) {
                container.push(marker);
            }else{
                throw "markers container is not an array";
            }
            
            return marker;
        }
        return false;
    }catch(e){
        reportError(e);
    }
}

// Sets the map on all markers in the array.
function setAllMap(map,container) {
    try{
        if (!validateParams(container,false)) {
             container = rpk_markers;
         }
         if (container instanceof Array) {
             for (var i = 0; i < container.length; i++) {
                 container[i].setMap(map);
             }
         }
    }catch(e){
        reportError(e);
    }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    try{
        setAllMap(null);
    }catch(e){
        reportError(e);
    }
}

// Shows any markers currently in the array.
function showMarkers(map) {
    try{
        if ((map = validateParams(map, rpk_map))) {
            setAllMap(map);
        }
    }catch(e){
        reportError(e);
    }
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers(container) {
    try{
        clearMarkers();
        if (!validateParams(container,false)) {
            container = rpk_markers;
        }
        if (container instanceof Array) {
            container = [];
        }
    }catch(e){
        reportError(e);
    }
}