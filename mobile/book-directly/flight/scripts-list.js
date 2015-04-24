
   $(function(){
        $("#price_slider").rangeSlider({
            arrows:false,
            formatter:function(val){
                return  parseInt(val) + " €";
            }
        });
   });
   
    $(document).on('click', '.flight-book', function(){
        //console.log($(this).closest('form').serialize());
        $(this).closest('form').submit();
        return false;
    });

    var code = '{$md5Code}';

    // color inputs
    $(document).on('click', 'input[type="radio"]', function(){
        var name = $(this).attr('name');
        if ($(this).is(':checked')) {
            $(this).closest('form').find('input[name='+name+']').next().removeClass('checked');
            $(this).next().addClass('checked');
        }
    });
    
    $(document).on('change', 'input[type="radio"]', function(){
        $(this).closest('form').find('input:disabled').next().removeClass('checked');
        if ( $(this).closest('form').find('input:checked').next().hasClass('checked')) {
        }
        else {
            $(this).closest('form').find('input:checked').next().addClass('checked');
        }
        if ($(this).attr('name')=='Departure') {
            $(this).closest('form').find('input[name="Return"]').next().removeClass('checked');
            $(this).closest('form').find('input[name="Return"]').eq(0).next().addClass('checked');
        }
    });


    //clear all selections and filter results
    $(document).on('click', '.flight-listing-filters'+code+' a', function(){
        var form = $(this).closest('form');
        var inputs = form.find('input[type="checkbox"]:checked');
        for (i=0;i<inputs.length;i++) {
            inputs.eq(i).prop('checked',false);
            checkboxfilter(inputs.eq(i));
        }
    });

    function updateAllScrolls(){
        $("#column1 .column_content").mCustomScrollbar("update");
        $("#column2 .column_content").mCustomScrollbar("update");
        $("#column3 .column_content").mCustomScrollbar("update");
        $("#column4 .column_content").mCustomScrollbar("update");
    }
    function showDetail22(id){
        $('tr.normal.' + id).toggle();
        $('tr.expand.' + id).toggle();
        updateAllScrolls();
    }

    $(document).on('click', '.disable a', function(){
        return false;
    });
    
var hotelObject;
function columnScrollAction(){
    if (hotelObject && hotelContainer){
        marginTop = hotelObject.offset().top - $('.header').height(); 
        //stick to bottom
        var diff = 0;
        if ((marginTop + hotelContainer.height()) > ($('#column2').height() - $('.footer').height() + 10)){
                diff = marginTop + hotelContainer.height() - $('#column2').height() + $('.footer').height() - 10;
                marginTop = marginTop - diff;
        }

        if (marginTop<0 || diff > hotelContainer.height()){
                marginTop = 0;
                hotelContainer.hide();
        } else {
                hotelContainer.show();
        }
        hotelContainer.css('margin-top', marginTop);
        if (hotelContainer.attr('id') == 'compare_content'){
            hotelContainer.height(hotelObject.height() + 20);
        }
    }
}
    