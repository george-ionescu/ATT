/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function initSlider_old(minVal ,maxVal, step, element, child)
{
    var options = {
        range: true,
        min: minVal,
        max: maxVal,
        values: [minVal, maxVal],
        step: step,
        slide : function (event, ui) {
            var min = ui.values[0],
            max = ui.values[1],
            key = event.target.id;
            $("#"+key+"value").text("$"+min+" - $"+max);
        //            $("#PriceMin").val(min);
        //            $("#PriceMax").val(max);
        },
        stop: function(event, ui) {
            var min = ui.values[0],
            max = ui.values[1],
            key = event.target.id;
        //            hideRange(min, max, key, element, child);
        //            showRange(min, max, key, element, child);

        }
    };
    return options;
}

function initSlider(container, formater, rate, xtraVal)
{
    var xtra = parseFloat(xtraVal);
    if(isNaN(xtra)){
        xtra = 0;
    }
    var $container = $(container);
    var $target = $($container.data('target'));
    var url = $container.data('url');
    //$containerInfo = $(container+'-info');
    if ($container.length){
        var showSliderValue = function() {
            var str = value.getValue().toString();
            var values = str.split(",");
            $(container+'-info>.range-start').html((formater(values[0])));
            $(container+'-info>.range-end').html((formater(values[1])));
        };
        var updateSliderFields = function(e) {
            var min = e.value[0],max = e.value[1];
            min = parseFloat(min)-xtra;
            max = parseFloat(max)-xtra;
            var priceMin = $(container+'-min');
            var priceMax = $(container+'-max');
            priceMin.val(min/rate);
            priceMax.val(max/rate);
            var form = $(this).parents('form:first');
            var data = form.serialize();
            filter(data,url,$target);
        };
        var value = $container.slider({
            tooltip: false
        })
        .on('slide', showSliderValue)
        .on('slideStop', updateSliderFields)
        .data('slider');
    }
    //console.log($container,'finished');
}

function displayAsHours(hours){
    if (hours   < 10) {
        hours   = "0"+hours;
    }
    hours = hours + ":00";
    return hours;
}

$.fn.processShow = function() {
    return this.each(function() {
        var value = parseInt($(this).data("filters"), 10);
        if(value > 0){
            value = value - 1;
            $(this).data("filters", value);
        }
        if (value < 1) {
            $(this).ShowAll();
        }
    });
};

$.fn.processHide = function() {
    return this.each(function() {
        var value = parseInt($(this).data("filters"), 10) + 1;
        $(this).data("filters", value);
        $(this).addClass('rpk-hidden');
        $(this).hide();
    });
};

$.fn.ShowAll = function() {
    return this.each(function() {
        var value = parseInt($(this).data("filters"), 10);
        var filtersrange = $(this).data("filtersrange");
        if(value == 0){
            var visible = 1;
            $.each( filtersrange[0], function(_key, _value){
                if(_value == "0"){
                    visible = 0;
                }
            });
            if(visible == 1){
                $(this).removeClass('rpk-hidden');
                $(this).show();
            }
        }
    });
}

function showRange(min, max, key, element, child) {
    $("#"+element+" "+child).filter(function() {
        var value = parseInt($(this).data(key), 10);

        if(value >= min && value <= max)
        {
            $(this).data("filtersrange")[0][key] = 1;
            return true;
        }
    }).ShowAll();
}

function hideRange(min, max, key, element, child) {
    $("#"+element+" "+child).filter(function() {
        var value = parseInt($(this).data(key), 10);
        if(value < min || value > max)
        {
            $(this).data("filtersrange")[0][key] = 0;
            return true;
        }
    }).addClass('rpk-hidden').hide();
}

function rpk_sortAsc(element, child, key, string) {
    var listitems = $(element).children(child).get();
    listitems.sort(function(a, b) {
        var value1 = $(a).data("sort")[0][key];
        var value2 = $(b).data("sort")[0][key];
        if(string == true){
            value1 = value1.toUpperCase();
            value2 = value2.toUpperCase();
        }else{
            value1 = parseInt(value1);
            value2 = parseInt(value2);
        }
        return (value1 < value2) ? -1 : (value1 > value2) ? 1 : 0;
    });
    $.each(listitems, function(idx, itm) {
        $(element).append(itm);
    });
}

function rpk_sortDesc(element, child, key, string) {
    var listitems = $(element).children(child).get();
    listitems.sort(function(a, b) {
        var value1 = $(a).data("sort")[0][key];
        var value2 = $(b).data("sort")[0][key];
        if(string == true){
            value1 = value1.toUpperCase();
            value2 = value2.toUpperCase();
        }else{
            value1 = parseInt(value1);
            value2 = parseInt(value2);
        }
        return (value1 > value2) ? -1 : (value1 < value2) ? 1 : 0;
    });
    $.each(listitems, function(idx, itm) {
        $(element).append(itm);
    });
}

//sort_flags: type of compare: 0-string or 1-number
//asc: true-asc sort false-desc sort
function rpk_sort(element, child, key, asc, sort_flags) {
    try{
        var debug_list = [];
        var listitems = $(element).children(child).get();
        listitems.sort(function(a, b) {
            debug_list.push(a.id+'-'+b.id);
            var value1 = $(a).data("sort")[0][key].toUpperCase();
            var value2 = $(b).data("sort")[0][key].toUpperCase();
            if(sort_flags==1){
                value1 = parseFloat(value1);
                value2 = parseFloat(value2);
            }
            if(asc){
                return (value1 < value2) ? -1 : (value1 > value2) ? 1 : 0;
            }
            return (value1 > value2) ? -1 : (value1 < value2) ? 1 : 0;
        });
        $.each(listitems, function(idx, itm) {
            $(element).append(itm);
        });
    }
    catch(err)
    {
        txt="There was an error on this page.\n\n";
        txt+="Error description: " + err.message + "\n\n";
        txt+="Click OK to continue.\n\n";
        alert(debug_list.join());
    }
}

var timer, req;
function sort(data,url,container){
    $container = container;
    $container.empty().html('<div class="pagination-centered"><img alt="Loading page..." src="'+basePath+'/assets/img/page_loader_mini.gif" style="display:block;margin:25% auto;"></div>');
    if (timer){
        clearTimeout(timer);
    }
    if(req){
        req.abort();
    }
    goTop();
    timer = setTimeout(function (){
        // ajax call
        req = $.get(url,data
            , function(result){
                req = null;
                if(result.Status == 0){
                    $container.empty().html(result.Message);
                }else if(result.Status == 2){
                    location.reload();
                }else if(result.Status == 3){
                    $container.empty().html(result.Message);
                }else if(result.Status == 1){
                    $container.empty().html(result.Object);
                    //updateAllScrolls();
                    var scrollOptions = {
                            scrollInertia: 0,
                            autoHideScrollbar : true,
                            updateOnContentResize : true,
                            horizontalScroll:false,
                            autoScrollOnFocus: false,
                            mouseWheelPixels: 50,
                            advanced:{
                                autoScrollOnFocus: false
                            },
                            callbacks:{
                                whileScrolling: function(){
                                    columnScrollAction();
                                }
                            }
                    };
                    $container.mCustomScrollbar(scrollOptions);
                }
            })
    }, 500);
    return true;
}

function filter(data,url,container){
    $container = container;
    $container.empty().html('<div class="pagination-centered"><img alt="Loading page..." src="'+basePath+'/assets/img/page_loader_mini.gif" style="display:block;margin:25% auto;"></div>');
    if (timer){
        clearTimeout(timer);
    }
    if(req){
        req.abort();
    }
    goTop();
    timer = setTimeout(function ()
    {
        // ajax call
        req = $.get(url,data
            , function(result){
                req = null;
                if(result.Status == 0){
                    $container.empty().html(result.Message);
                }else if(result.Status == 2){
                    location.reload();
                }else if(result.Status == 3){
                    $container.empty().html(result.Message);
                }else if(result.Status == 1){
                    $container.empty().html(result.Object);
                    //updateAllScrolls();
                }
            }).always(function(result){
                //console.log('totalPages: ' + totalPages);
                if(result.Status != 1){
                    $container.empty().html(result.Object);
                }else{
                    //initPagination(totalPages, 1, paginationUrl, encode, $container);
                    var newData = deserialize(data);
//                    console.log('init pagination');
//                    console.log(totalPages);
//                    console.log(paginationUrl);
//                    console.log(newData.code);
//                    console.log($container);
                    initPagination(totalPages, 1, paginationUrl, newData.code, $container);
                }
            });
    }, 500);
    return true;
}

function checkboxfilter(element)
{
    var target = element.data('target');
    var form = element.parents('form:first');
    if(!isset(page)){
        var page = 0;
    }
    var data = form.serialize()+ "&page=" + page;
    var url = element.data('url');
    filter(data,url,$(target));
    //updateAllScrolls();
    var scrollOptions = {
            scrollInertia: 0,
            autoHideScrollbar : true,
            updateOnContentResize : true,
            horizontalScroll:false,
            autoScrollOnFocus: false,
            mouseWheelPixels: 50,
            advanced:{
                autoScrollOnFocus: false
            },
            callbacks:{
                whileScrolling: function(){
                    //columnScrollAction();
                }
            }
    };
    $(target).mCustomScrollbar(scrollOptions);
}

function makeSort(element)
{
//    sortIcon(element);
//    var value = element.data('value');
//    element.data('value',!value);
//    var id = element.attr('id');

    //for select element:
    var value = element.data('value');
    element.data('value',!value);
    var id = element.attr('id');
    
    $('#'+id+'Asc').val(value);
    var data = $('#Form'+id).serialize();
    var url = element.data('url');
    var target = element.data('target');
    sort(data,url,$(target));
//    setTimeout(function(){updateAllScrolls();},1000);
//    updateAllScrolls();
    
}