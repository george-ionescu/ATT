
    $(document).on('change', '.child-or-infant', function() {
        if ($(this).attr('name')=='infants[]') $(this).attr('name','children[]');
        else $(this).attr('name','infants[]');
    });

    	$(function(){
		$(document).on('change', '#tripType1', function(){
                    $('.round_trip').show().find('select,input').prop('disabled',false);
                    $('.one_way').hide().find('select,input').prop('disabled',true);
		});
		$(document).on('change', '#tripType2', function(){
                    $('.round_trip').hide().find('select,input').prop('disabled',true);
                    $('.one_way').show().find('select,input').prop('disabled',false);
    $( ".datepicker_from" ).datepicker({
    //dateIn.datepicker({
        minDate: 0,
    	//dateFormat: 'dd M yy',
    	dateFormat: 'yy-mm-dd',
            changeMonth: true,
	    changeYear: true,
	    onSelect: function(dateText){
	        $(this).hide();
	        //write value in box
	        var tmpData = dateText.split("-");
                var formattedDate = new Date(dateText);
	        $(this).parent().find('.year').html(tmpData[0]);
	        $(this).parent().find('.month').html($.format.date(formattedDate, 'MMM'));
	        $(this).parent().find('.day').html(tmpData[2]);
	        //
	        //$( ".datepicker_to" ).datepicker( "option", "minDate", dateText );
                var dateTo = $(this).closest('.row_form').find('.datepicker_to');
	        dateTo.datepicker( "option", "minDate", dateText );
	        dateTo.datepicker( "setDate", dateText );
                dateTo.parent().find('.number_small').children('input').val(dateText);
                dateTo.parent().find('.year').html(tmpData[0]);
                dateTo.parent().find('.month').html($.format.date(formattedDate, 'MMM'));
                if (dateTo.hasClass('hotel')) {
                    dateTo.parent().find('.day').html(parseInt(parseInt(tmpData[2])+1));
                }else {
                    dateTo.parent().find('.day').html(tmpData[2]);
                }
                $(this).parent().find('.calendar_value').val(dateText);
	    }
    });
                    //$('#multi_city').hide();

                    //updateAllScrolls();
                    //resetChildAges();
                    //closeSearchOptions();
		});
		$(document).on('change', '#tripType3', function(){
                    $('#round_trip').hide().find('select,input').prop('disabled',true);
                    $('#one_way').hide().find('select,input').prop('disabled',false);
                    //$('#multi_city').show();

                    //updateAllScrolls();
                    ///resetChildAges();
                    //closeSearchOptions();
		});
	});

        var ts=Math.round((new Date()).getTime() / 1000);
        var pids = {$pids};
        function getfreebase() {
            var cityId = $('#FlightDestinationCityId').val();
            if(cityId)
            {
                $.getJSON('{$this->url('freebase', array ('controller' => 'freebase', 'action' => 'get'))}', {id:cityId})
                .always(function (result){
                    if(result.Status == 1){
                        $('#column3').find('.preloader_container').next().after(result.Object);
                    }
                });
            }
        }
        
        function startSearch() {
            getfreebase();
            var submitUrl = "{$this->url('flight',array('controller'=>'flightSearch','action'=>'normala'))}";
            var pid = 0;
            var form = $('#flights_form');
            $.ajax({
                type: "GET",
                url: submitUrl,
                data: form.serialize(),
                success: function(result){},
                error: function(){}
            }).always(function(result){
                if(result.Status == 1){
                    //pids = result.Object.key+'flight';
                    pids = result.Object.ProcessIDs;
                    var hotel;
                    var flight;
                    var url = "{$this->url('hotel', array ('controller' => 'hotelAjax', 'action' => 'checkProcess'))}";
                    $.periodic({period: 2000, decay: 1.2, max_period: 60000}, function() {
                        $.ajax({
                            periodic: this,
                            type: "GET",
                            url: url,
                            data: {pid:pids, ts:ts}
                        }).always(function(result, status){
                            var statuses = result.Status;
                            for (status in statuses) {
                                if (statuses.hasOwnProperty(status)) {
                                    if(statuses[status] == 1){
                                        delete pids[status];
                                    }else if(statuses[status] == 2){
                                        //do nothing
                                    }else{
                                        delete pids[status];
                                    }
                                }else{
                                    //do nothing
                                }
                            }
                            ts = Math.round((new Date()).getTime() / 1000);
                            if($.isEmptyObject(pids)){
                                this.periodic.cancel();

                                    var form = $('#flights_form');
                                    form.submit();
                            }
                        });
                    });
                }else{
                    var form = $('#flights_form');
                    form.submit();
                }
            });
        }


//#flights_form  submit
//proceed_button

$(document).on('click', '#flights_form .proceed_button', function(e) {
e.preventDefault();
//$('#flights_form').submit(function() {
    console.log('submitting form');
        var but = $(this).find('.with-loading');
    //for max limit persons search
    var adults = $('#FlightAdults1').val();
    var seniors = $('#FlightSeniors1').val();
    var children = $('#FlightChildren1').val();
    var infants = $('#FlightInfants1').val();
        if($(this).validate(false, {errorMessagePosition : 'element'})){
            if($('#FlightOriginCityId').val().length==0) {
                $('#FlightOriginError').show();
                return false;
            }
            if($('#FlightDestinationCityId').val().length==0) {
                $('#FlightDestinationError').show();
                return false;
            }
            if (parseInt(infants) > ( parseInt(adults)+parseInt(seniors) )) {
                if ($('.alert').is(':visible')) {
                }
                else {
                    $('#search-control-avion').append('<div class="clearfix"></div><div class="alert alert-info mTop10"><button class="close" data-dismiss="alert">×</button><strong>Heads up!</strong> {$this->translate('It seems the number of selected infants is bigger than the number of selected adults. Please select one infant for each traveling adult.')}</div>');
                }
                return false;
            }
            if ((parseInt(adults)+parseInt(seniors)+parseInt(children) > 8) || (parseInt(adults)+parseInt(seniors)+parseInt(children)+parseInt(infants) > 8)) {
                if ($('.alert').is(':visible')) {
                }
                else {
                    $('#search-control-avion').append('<div class="clearfix"></div><div class="alert alert-info mTop10"><button class="close" data-dismiss="alert">×</button><strong>Heads up!</strong> {$this->translate('The number of selected passengers is quite big. Please contact us for a better research and a customized offer for groups.')}</div>');
                }
                return false;
            }
            else {
            
                var oldSlide = $('#column3');
                var newSlide = $('#column3');
                var url = '##';
                var class_bootstrap = 'col-md-3';

                if (oldSlide && newSlide && url != '#'){
                    //changeSlide(oldSlide, newSlide, url, class_bootstrap);
                    
                    resetSlides();
                                                    
                    //disable previous columns
                    $('#column1').addClass('column_disabled').prepend('<div class="column_disabled2"></div>');
                    $('#column2').addClass('column_disabled').prepend('<div class="column_disabled2"></div>');

                    //close all slides after selected one
                    if (oldSlide.attr('id')){
                        oldId = oldSlide.attr('id');
                        oldId = parseInt(oldId.replace('column', ''));
                        for (i=oldId+1; i<=4; i++){
                            $('#column' + i).hide();
                        }
                    }

                    oldSlide.hide('slide', {
                            direction : 'left',
                            complete: function() {
                                    //openSlide(newSlide, url, class_bootstrap);
                                    //showPreloader();
                                //else part from openSlide function (no need for url)
                                    //hidePreloader();
		
                                    if (class_bootstrap){
                                        class_bootstrap += ' nopadding';
                                        newSlide.removeClass().addClass(class_bootstrap);
                                    }
                                    newSlide.show('slide', {
                                        direction : 'left',
                                        complete: function() {
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
                                                newSlide.find(".column_content").mCustomScrollbar(scrollOptions);
                                                //append loader in column
                                                newSlide.find(".column_content").html('<div class="preloader_container" style="padding: 5px 0;"><div class="windows8"><div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_3"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_4"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div></div><div class="clearfix"></div></div><div class="clearfix"></div>');
                                                //callFormEvents();

                                                //get city info
                                                startSearch();
                                        }
                                    }, 500);
                    }
                    }, 500);
                }

                return false;
//                but.button('loading');
//                return true;
                
            }
        }else {
            return false;
        }
    });