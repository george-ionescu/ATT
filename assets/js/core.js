//autocomplete
var availableTags = [
         "Paris",
         "Roma",
         "Barcelona",
         "Madrid",
         "Bucuresti",
         "Praga",
         "Berlin"
];
var activeCalendarContainer;
var hotelObject;
var hotelContainer;

function createBreadcrump(){
	var brd = '<li><a href="#">Home</a></li>';
	
	for (i=1; i<=4; i++){
		if ($('#column' + i).is(':visible') && $('#column' + i).find('h1').attr('breadcrumb')){
			brd += '<li><a href="javascript:backTo('+i+');">' + $('#column' + i).find('h1').attr('breadcrumb') + '</a></li>';
		}
	}
	
	$('#breadcrumb').html(brd);
}

function backTo(poz){
	
	var oldSlide = $('#column1');
	var newSlide = $('#column1');
	var url = $('#column' + poz).find('h1').attr('breadcrumb-href');
	var class_bootstrap = 'col-md-3';
	
	if (oldSlide && newSlide && url != '#'){
		closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
	}
	
	createBreadcrump();
}

function activateMoreLess(){
	$('.less').hide();
	$('.more').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		$(this).hide();
		$(this).parent().find('.less').show();
		$(this).parent().find('.text-complete').show();
		updateAllScrolls(); 
	});
	$('.less').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		$(this).hide();
		$(this).parent().find('.more').show();
		$(this).parent().find('.text-complete').hide();
		updateAllScrolls(); 
	});
}


//auto hide placeholder
$(function(){
    $('input').focusin(function(){
    	$(this).data('holder', $(this).attr('placeholder'));
        $(this).attr('placeholder','');
    });
    $('input').focusout(function(){
        $(this).attr('placeholder', $(this).data('holder'));
    });
});

$(document).on("click", function(e){

});


function closeMarkers(){
    $('.infobox').each(function() {
        $(this).remove();
    });
}

function openSlide(newSlide, url, class_bootstrap){
	showPreloader();
	if (url){
		$.get(url, function( data ) {
			hidePreloader();
			
			if (class_bootstrap){
                            class_bootstrap += ' nopadding';
                            newSlide.removeClass().addClass(class_bootstrap);
			}
			newSlide.html(data);
			callFormEvents();
			
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

                                    animationDone();
                            }
			}, 500);
		});
	} else {
		hidePreloader();
		
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
				
				callFormEvents();
			}
		}, 500);
	}
	createBreadcrump();
}

function closeSlideById(id){
	$('#' + id).hide('slide', {
		direction : 'left',
		complete: function() {
			//complete close
        }
	}, 500);
	
	if (id == 'column3x'){
		$('.hotel_detail').removeClass('active');
		$('.map').removeClass('active');
		$('.compare').removeClass('active');
		$('.flight').removeClass('active');
	}
}

function closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap){
	$('#column4').hide('slide', {
		direction : 'left',
		complete: function() {
			//complete close
			$('#column3').hide('slide', {
				direction : 'left',
				complete: function() {
					//complete close
					$('#column2').hide('slide', {
						direction : 'left',
						complete: function() {
							//complete close
							$('#column1').hide('slide', {
								direction : 'left',
								complete: function() {
									//complete close
									changeSlide(oldSlide, newSlide, url, class_bootstrap);
						        }
							}, 200);
				        }
					}, 200);
		        }
			}, 200);
        }
	}, 200);
}
function closeAllSlidesAndOpen2(oldSlide, newSlide, url, class_bootstrap){
	$('#column3').hide('slide', {
		direction : 'left',
		complete: function() {
			//complete close
			$('#column2').hide('slide', {
				direction : 'left',
				complete: function() {
					//complete close
					$('#column1').hide('slide', {
						direction : 'left',
						complete: function() {
							//complete close
							changeSlide(oldSlide, newSlide, url, class_bootstrap);
				        }
					}, 200);
		        }
			}, 200);
        }
	}, 200);
}



function updateAllScrolls(){
	$("#column1 .column_content").mCustomScrollbar("update");
	$("#column2 .column_content").mCustomScrollbar("update");
	$("#column3 .column_content").mCustomScrollbar("update");
	$("#column4 .column_content").mCustomScrollbar("update");
}

function resetSlides(){
	$(".datepicker").hide();
}

function changeSlide(oldSlide, newSlide, url, class_bootstrap){
	resetSlides();
	
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
			openSlide(newSlide, url, class_bootstrap);
        }
	}, 500);
}

//function toggleSearchOptions(){
//	$('#search_options').toggle();
//	if (!$('#search_options').is(':visible')){
//		$('.search_options .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
//	} else {
//		$('.search_options .fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
//	}
//	updateAllScrolls();
//}
function closeSearchOptions(){
	$('#search_options').hide();
	if (!$('#search_options').is(':visible')){
		$('.search_options .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
	} else {
		$('.search_options .fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
	}
	updateAllScrolls();
}

function toggleChildrenDetail(id){
	if (id){
		$('#' + id).find('.children_detail').toggle();
		if (!$('#' + id).find('.children_detail').is(':visible')){
			$('#' + id).find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
		} else {
			$('#' + id).find('.fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
		}
	} else {
		$('.children_detail').toggle();
		if (!$('.children_detail').is(':visible')){
			$('.detail_button .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
		} else {
			$('.detail_button .fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
		}
	}
	
	
	updateAllScrolls();
}

function showRegisterPopUp(){
	showPreloader();
	$.get( "include/pages/my_account/register.php", function( data ) {
		hidePreloader();
		createWindow('dialog_ajax', '', data, 320, 280);
	});
}
function showCreateAccountPopUp(){
	showPreloader();
	$.get( "include/pages/my_account/create-account.php", function( data ) {
		hidePreloader();
		createWindow('dialog_ajax', '', data, 320, 280);
	});
}
function showLostPassword(){
	showPreloader();
	$.get( "include/pages/my_account/lost-password.php", function( data ) {
		hidePreloader();
		createWindow('dialog_ajax', '', data, 320, 280);
	});
}

function resetChildDetails(){
	$('.children_detail').hide();
	$('.detail_button .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
	updateAllScrolls();
}

function resetChildAges(){
	resetChildDetails();
	
	$('.age1').show();
	for (i=2; i<=5; i++){
		$('.age' + i).hide();
	}
}

function putActiveOnLabel(){
	$(".options_list input:checkbox, .options_list input:radio").each(function(){
		if ($(this).is(':checked')){
			$(this).parent().addClass('active');
		} else {
			$(this).parent().removeClass('active');
		}
	});
}

function callFormEvents(){
	activateMoreLess();
	//init calendars fo reserve form
	for (i=1; i<=4; i++){
		$("#calendar"+i).datepicker({
	 	    dateFormat: 'dd/mm/yy',
	 	    changeMonth: true,
	        changeYear: true,
	    });
	}
	
	//slider
//	$("#slider").rangeSlider({
//            arrows:false,
//            formatter:function(val){
//                    return  parseInt(val) + " â‚¬";
//            }
//        });

	//trigger resize event gmap
	if ($('#google-map').length){
		map = $("#google-map").gmap3('get');
		google.maps.event.trigger(map, 'resize');
		map.setZoom(map.getZoom());
	}
	
	//color label on select
	putActiveOnLabel();
	$("form input:checkbox, form input:radio").click(function(){
            putActiveOnLabel();
	});
	
	//open calendar
	$('.open_calendar').parent().parent().each(function(){
            $(this).css( 'cursor', 'pointer' );
	});
	$('.open_calendar').parent().parent().click(function(event){
            event.preventDefault();
            $(".datepicker").hide();

            activeCalendarContainer = $(this);
            $(this).find(".datepicker").show();
            event.stopPropagation();	//needed for hiding when clicked outside
	});
	/* dcs added - START functionality to hide datepickers when clicked outside or hitting escape */
	$(document).on('click', function(event) {
            if ($(event.target).closest('.ui-datepicker').length === 0) {
                $(".datepicker").hide();
                event.stopPropagation();
            }
        });
        $(document).on('keydown', function(event) {
            if (event.keyCode === 27 && $('.ui-datepicker').is(':visible')) {
                $(".datepicker").hide();
                event.stopPropagation();
            }
        });
        /* dcs added - END functionality to hide datepickers when clicked outside or hitting escape */
        
	//create calendars
	/*$(".datepicker").datepicker({
 	    dateFormat: 'dd M yy',
 	    changeMonth: true,
        changeYear: true,
        onSelect: function(dateText){
            $(this).hide();
            //write value in box
            var tmpData = dateText.split(" ");
            $(this).parent().find('.day').html(tmpData[0]);
            $(this).parent().find('.month').html(tmpData[1]);
            $(this).parent().find('.year').html(tmpData[2]);
        }
    });
	//hide all calendars
    $(".datepicker").hide();*/
    
    
    
    
	
	//counter up/down
    $('.counterUp').unbind();
    $('.counterUp').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		poz = parseInt($(this).parent().find('.counterValue').html());
		if (poz < 5){
			poz++;
			if (poz<10){
				pozString = "0" + poz;
			} else {
				pozString = poz;
			} 
			$(this).parent().find('.counterValue').html(pozString);
                        //dcs added - change number of adults in input.adults-number to be sent
                        if ($(this).parent().find('.counterValue').next().hasClass('adults-number')) $(this).parent().find('.counterValue').next().val(parseInt(pozString));
//                        if ($(this).parent().find('.counterValue').next().hasClass('children-number')) $(this).parent().find('.counterValue').next().val(parseInt(pozString));
			
			//special case for children
			if ($(this).parent().hasClass('children')){
				for (i=1; i<=poz; i++){
					$(this).parent().parent().parent().parent().parent().find('.age' + i).show().find('select').prop('disabled',false);
				}
				for (i=poz+1; i<=5; i++){
					$(this).parent().parent().parent().parent().parent().find('.age' + i).hide().find('select').prop('disabled',true);
				}
				
				if (poz == 0){
					$(this).parent().parent().find('.detail_button').hide();
				} else {
					$(this).parent().parent().find('.detail_button').show();
				}
			}
			
			//special case for room
			if ($(this).parent().hasClass('room')){
				for (i=1; i<=poz; i++){
                                    $('#room' + i).show().find('input,select').prop('disabled',false);
				}
				for (i=poz+1; i<=5; i++){
                                    $('#room' + i).hide().find('input,select').prop('disabled',true);
				}
			}
		}
		updateAllScrolls();
	});
    $('.counterDown').unbind();
    $('.counterDown').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		poz = parseInt($(this).parent().find('.counterValue').html());
		if (poz > 0){
                        if ($(this).parent().hasClass('room')){
                            if (poz > 1){
                                poz--;
                            }
                            else {
                                //do nothing aka don't go below 1
                            }
                        }
                        else {
                            poz--;
                        }
			if (poz<10){
				pozString = "0" + poz;
			} else {
				pozString = poz;
			} 
			$(this).parent().find('.counterValue').html(pozString);
                        //dcs added - change number of adults in input.adults-number to be sent
                        if ($(this).parent().find('.counterValue').next().hasClass('adults-number')) $(this).parent().find('.counterValue').next().val(parseInt(pozString));
                        //if ($(this).parent().find('.counterValue').next().hasClass('children-number')) $(this).parent().find('.counterValue').next().val(parseInt(pozString));
			
			//special case for children
			if ($(this).parent().hasClass('children')){
				for (i=1; i<=poz; i++){
					$(this).parent().parent().parent().parent().parent().find('.age' + i).show().find('select').prop('disabled',false);
				}
				for (i=poz+1; i<=5; i++){
					$(this).parent().parent().parent().parent().parent().find('.age' + i).hide().find('select').val('').prop('disabled',true);
				}
				
				if (poz == 0){
					$(this).parent().parent().find('.detail_button').hide();
				} else {
					$(this).parent().parent().find('.detail_button').show();
				}
			}
			
			//special case for room
			if ($(this).parent().hasClass('room')){
                            for (i=1; i<=poz; i++){
                                $('#room' + i).show().find('input,select').prop('disabled',false);
                            }
                            for (i=poz+1; i<=5; i++){
                                $('#room' + i).hide().find('input,select').prop('disabled',true);
                            }
			}
		}
		updateAllScrolls();
	});

	//autocomplete
//	$(".autocomplete_input").autocomplete({
//		source: availableTags
//	});
}



function animationDone(){
	callFormEvents();
	
//    $("#price_slider").rangeSlider({
//    	arrows:false,
//    	formatter:function(val){
//            return  parseInt(val) + " €";
//    	}
//    });
	
//	//open/close column
//	$('a.slide').unbind();
//	$('a.slide').click(function(event){
//		event.preventDefault();
//		event.stopPropagation();
//		
//		if (!$(this).hasClass('active') || $(this).hasClass('assisted')){
//			$('a.slide').removeClass('active');
//			$(this).addClass('active');
//			
//			$('a.slide').parent().parent().removeClass('active');
//			$(this).parent().parent().addClass('active');
//			
//			if ($(this).hasClass('assisted')){
//				$(this).find('.button_after_big_info').removeClass('active');
//				$(this).find('.button_after_big_info').find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
//			}
//			
//			var oldSlide = $('#' + $(this).attr('column-close'));
//			var newSlide = $('#' + $(this).attr('column-open'));
//			var url = $(this).attr('href');
//			var class_bootstrap = ($(this).attr('column-class')) ? $(this).attr('column-class') : 'col-md-3';
//			
//			if (oldSlide && newSlide && url != '#'){
//				createBreadcrump();
//				changeSlide(oldSlide, newSlide, url, class_bootstrap);
//			}
//		}
//	});
	
	//open hotel detail
	$('.hotel_detail').unbind();
	$('.hotel_detail').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		var foo = false;
		if ($('#flight_content').is(':visible') || $('#compare_content').is(':visible') || $('#column3gmap').is(':visible')){
			foo = true;
		}
		
		if (!$(this).hasClass('active') || foo){
			$('.hotel_detail').removeClass('active');
			$(this).addClass('active');
			
			$('#column3x').hide();
			$('#column3gmap').hide();
			
			var url = '';
			if ($(this).hasClass('type1')){
				url = 'include/elements/rooms_and_rates.php?page=signin'; 
			}
			if ($(this).hasClass('type2')){
				url = 'include/elements/rooms_and_rates.php?page=flight_tabs'; 
			}
			if ($(this).hasClass('type3')){
				url = 'include/elements/rooms_and_rates.php?page=signin'; 
			}
			if ($(this).hasClass('type4')){
				url = 'include/elements/rooms_and_rates.php?page=flight_tabs'; 
			}
			if ($(this).hasClass('service')){
				url = 'include/elements/service_detail.php'; 
			}
			if ($(this).hasClass('recent')){
				url = 'include/elements/load.php?page=sort_hotel';
			}
			
			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		} else {
			$(this).removeClass('active');
			closeSlideById('column3');
			$('#column4').hide();
		}
	});
	//open hotel special functions
	$('.hotel_detail a').unbind();
	$('.hotel_detail a').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		var foo = false;
		if ($('#column3').is(':visible') || $('#flight_content').is(':visible') || $('#compare_content').is(':visible') || $('#column3gmap').is(':visible')){
			foo = true;
		}
		if ($(this).hasClass('compare') && $('#compare_content').is(':visible')){
			foo = false;
		}
		if ($(this).hasClass('flight') && $('#flight_content').is(':visible')){
			foo = false;
		}
		if ($(this).hasClass('map') && $('#column3gmap').is(':visible')){
			foo = false;
		}
		
		
		if (!$(this).hasClass('active') || foo){
			$('.hotel_detail').removeClass('active');
			$(this).addClass('active');
			$(this).closest('.hotel_detail').addClass('active');
			
			$('#column3').hide();
			$('#column4').hide();
			$('#column3x').hide();
			$('#column3gmap').hide();
			
			if ($(this).hasClass('map')){
				openSlide($('#column3gmap'), null, 'col-md-6');
			}
			if ($(this).hasClass('compare')){
				openSlide($('#column3x'), null, 'col-md-6');
				//align compare with hotel
				hotelId = $(this).closest('.hotel_detail').attr('id');
				hotelId = parseInt(hotelId.replace('hotel', ''));
				//calculate position
				hotelContainer = $('#compare_content');
				hotelObject = $(this).closest('.hotel_detail');
				marginTop = hotelObject.offset().top - $('.header').height(); 
				//stick to bottom
				var diff = 0;
				if ((marginTop + hotelContainer.height()) > ($('#column2').height() - $('.footer').height() + 10)){
					diff = marginTop + hotelContainer.height() - $('#column2').height() + $('.footer').height() - 10;
					marginTop = marginTop - diff;
				}
				
				$('#flight_content').hide();
				$('#compare_content').show();
				$('#compare_content').css('margin-top', marginTop);
				$('#compare_content').height(hotelObject.height() + 20);
			}
			if ($(this).hasClass('flight')){
				openSlide($('#column3x'), null, 'col-md-6');
				//align compare with hotel
				hotelId = $(this).closest('.hotel_detail').attr('id');
				hotelId = parseInt(hotelId.replace('hotel', ''));
				//calculate position
				hotelContainer = $('#flight_content');
				hotelObject = $(this).closest('.hotel_detail');
				marginTop = hotelObject.offset().top - $('.header').height(); 
				//stick to bottom
				var diff = 0;
				if ((marginTop + hotelContainer.height()) > ($('#column2').height() - $('.footer').height() + 10)){
					diff = marginTop + hotelContainer.height() - $('#column2').height() + $('.footer').height() - 10;
					marginTop = marginTop - diff;
				}
				
				$('#compare_content').hide();
				$('#flight_content').show();
				$('#flight_content').css('margin-top', marginTop);
			}
		} else {
			$('.hotel_detail').removeClass('active');
			$(this).removeClass('active');
			$(this).closest('.hotel_detail').removeClass('active');
			
			$('.map').removeClass('active');
			$('.compare').removeClass('active');
			$('.flight').removeClass('active');
			
			closeSlideById('column4');
			closeSlideById('column3');
			closeSlideById('column3x');
			closeSlideById('column3gmap');
		}
	});
	
	
	activateMoreLess();
	updateAllScrolls();
}

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





$(document).ready(function(){
	animationDone();
});

$(window).resize(function() {
	if (hotelObject && hotelContainer){
		if (hotelContainer.attr('id') == 'compare_content'){
			hotelContainer.height(hotelObject.height() + 20);
		}
		columnScrollAction();
	}
});

$(document).bind(
      'touchmove',
          function(e) {
            e.preventDefault();
          }
);
