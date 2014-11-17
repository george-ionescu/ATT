function test(){
	var slideArray = [
          // Slideshow Images
  		{src : 'backgrounds/background_3.jpg', fade: 1000, title : 'rome', subtitle : 'from 300 euro', url : 'http://www.google.ro/'},
  		{src : 'backgrounds/background_4.jpg', fade: 1000, title : 'prague', subtitle : 'from 400 euro', url : 'http://www.yahoo.ro/'},
    ]
	          
	$.vegas('destroy');
	loadBackgroundSlideshow(slideArray);
}








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

function createBreadcrump(bread){
	var brd = '<li><a href="/">Home</a></li>';
	
	for (i = 0; i < bread.length; i++) {
		var oldSlide = bread[i]['oldSlide'];
		var newSlide = bread[i]['newSlide'];
		var url = bread[i]['url'];
		var class_bootstrap = bread[i]['class_bootstrap'];
		
		brd += '<li><a href="javascript:backTo(\''+oldSlide+'\',\''+newSlide+'\',\''+url+'\',\''+class_bootstrap+'\');">' + bread[i]['title'] + '</a></li>';
	}
	
	$('#breadcrumb').html(brd);
}

function backTo(oldSlide, newSlide, url, class_bootstrap){
	
	var oldSlideObj = $('#' + oldSlide);
	var newSlideObj = $('#' + newSlide);
	
	if (oldSlideObj && newSlideObj && url != '#'){
		closeAllSlidesAndOpen(oldSlideObj, newSlideObj, url, class_bootstrap);
	}
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
	var newWindowWidth = $(window).width();
	var slideId = newSlide.attr('id');
	slideId = parseInt(slideId.replace('column', ''));
	
	if (newWindowWidth < 1024){
		class_bootstrap = "col-md-3";
	}
	
	for (i=1; i<slideId; i++){
		$('#column' + i).addClass('column_disabled').prepend("<div class='column_disabled2'></div>");
	}
	
	if (url){
		$.get(url, function( data ) {
			hidePreloader();
			
			if (class_bootstrap){
				class_bootstrap += ' nopadding';
				newSlide.removeClass().addClass(class_bootstrap);
			}
			
			//for mobile version, if it's a sort column, move it to header
			var routeData = url.split("?")[0];
			console.log(routeData);
			if ((routeData.indexOf("sort") > -1 || routeData.indexOf("trip_info") > -1) && newWindowWidth < 1024){
				$('#sort_button').show();
				$('#sort_wrapper').html(data);
				clearInterval(t);
				openNext();
			} else {
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
				                autoScrollOnFocus: false,
				            },
				            callbacks:{
				                whileScrolling: function(){
				                	columnScrollAction();
				                }
				            }
						};
						if (newWindowWidth < 1024){
							console.log('disable scroll');
							newSlide.find(".column_content").mCustomScrollbar('disable');
						} else {
							newSlide.find(".column_content").mCustomScrollbar(scrollOptions);
						}
						
						//hide previous columns on mobile
						if (newWindowWidth < 1024){
							for (i=1; i<slideId; i++){
								$('#column' + i).hide();
							}
						}
						
						for (i=1; i<slideId; i++){
							$('#column' + i).removeClass('column_disabled');
						}
						$('.column_disabled2').remove();
						
						animationDone();
					}
				}, 200);
			}
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
		                autoScrollOnFocus: false,
		            },
		            callbacks:{
		                whileScrolling: function(){
		                	columnScrollAction();
		                }
		            }
				};
				if (newWindowWidth < 1024){
					console.log('disable scroll');
					newSlide.find(".column_content").mCustomScrollbar('disable');
				} else {
					newSlide.find(".column_content").mCustomScrollbar(scrollOptions);
				}
				
				for (i=1; i<slideId; i++){
					$('#column' + i).removeClass('column_disabled');
				}
				$('.column_disabled2').remove();
				
				callFormEvents();
			}
		}, 200);
	}
}

function closeSlideById(id){
	$('#' + id).hide('slide', {
		direction : 'left',
		complete: function() {
			//complete close
        }
	}, 200);
	
	if (id == 'column3x'){
		$('.hotel_detail').removeClass('active');
		$('.map').removeClass('active');
		$('.compare').removeClass('active');
		$('.flight').removeClass('active');
	}
	animationDone();
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
	if ($(window).width() < 1024){
		console.log('disable all scrolls');
		$("#column1 .column_content").mCustomScrollbar('disable');
		$("#column2 .column_content").mCustomScrollbar('disable');
		$("#column3 .column_content").mCustomScrollbar('disable');
		$("#column4 .column_content").mCustomScrollbar('disable');
	} else {
		$("#column1 .column_content").mCustomScrollbar("update");
		$("#column2 .column_content").mCustomScrollbar("update");
		$("#column3 .column_content").mCustomScrollbar("update");
		$("#column4 .column_content").mCustomScrollbar("update");
	}
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
	}, 200);
}

function toggleSearchOptions(){
	$('#search_options').toggle();
	if (!$('#search_options').is(':visible')){
		$('.search_options .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
	} else {
		$('.search_options .fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
	}
	updateAllScrolls();
}
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
		$("#calendar"+i).datepicker('setDate', new Date());
	}
	
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
	$('.open_calendar').parent().parent().each(function(event){
		$(this).css( 'cursor', 'pointer' );
	});
	$('.open_calendar').parent().parent().click(function(event){
		event.preventDefault();
		$(".datepicker").hide();
		
		activeCalendarContainer = $(this);
		$(this).find(".datepicker").show();
	});
	
    //datepicker
	$( "#datepicker_single" ).datepicker({
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
	        //
	        $( "#datepicker_to" ).datepicker( "option", "minDate", dateText );
	    }
    });
    $( "#datepicker_from" ).datepicker('setDate', new Date());
	$( "#datepicker_from" ).datepicker({
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
	        //
	        $( "#datepicker_to" ).datepicker( "option", "minDate", dateText );
	    }
    });
    $( "#datepicker_from" ).datepicker('setDate', new Date());
    $( "#datepicker_to" ).datepicker({
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
	        //
	        //$( "#datepicker_from" ).datepicker( "option", "maxDate", dateText );
	    }
    });
    $( "#datepicker_to" ).datepicker('setDate', new Date());
    $("#datepicker_single").hide();
    $("#datepicker_to").hide();
    $("#datepicker_from").hide();
    
    
	
	//counter up/down
    $('.counterUp').unbind();
    $('.counterUp').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		poz = parseInt($(this).parent().find('.counterValue').html());
		isHotel = $(this).parent().parent().parent().parent().hasClass('hotel_form');
		if (isHotel){
			maxPerson = 5;
		} else {
			maxPerson = 9;
		}
		maxValue = parseInt($(this).parent().find('.counterValue').attr('maxvalue')) || 8;
		
		if (isHotel){
			if (poz < maxValue){
				poz++;
				if (poz<10){
					pozString = "0" + poz;
				} else {
					pozString = poz;
				} 
				$(this).parent().find('.counterValue').html(pozString);
				
				//special case for children
				if ($(this).parent().hasClass('children')){
					for (i=1; i<=poz; i++){
						$(this).parent().parent().parent().parent().parent().find('.age' + i).show();
					}
					for (i=poz+1; i<=8; i++){
						$(this).parent().parent().parent().parent().parent().find('.age' + i).hide();
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
						$('#room' + i).show();
					}
					for (i=poz+1; i<=5; i++){
						$('#room' + i).hide();
					}
				}
			}
		} else {
			//maximum 9 persons
			nrAdult = parseInt($('#counterAdult').html());
			nrChildren = parseInt($('#counterChildren').html());
			
			if (poz < maxValue && (nrAdult+nrChildren < maxPerson)){
				poz++;
				if (poz<10){
					pozString = "0" + poz;
				} else {
					pozString = poz;
				} 
				$(this).parent().find('.counterValue').html(pozString);
				
				//special case for children
				if ($(this).parent().hasClass('children')){
					for (i=1; i<=poz; i++){
						$(this).parent().parent().parent().parent().parent().find('.age' + i).show();
					}
					for (i=poz+1; i<=8; i++){
						$(this).parent().parent().parent().parent().parent().find('.age' + i).hide();
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
						$('#room' + i).show();
					}
					for (i=poz+1; i<=5; i++){
						$('#room' + i).hide();
					}
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
		minValue = parseInt($(this).parent().find('.counterValue').attr('minvalue')) || 0;
		
		if (poz > minValue){
			poz--;
			if (poz<10){
				pozString = "0" + poz;
			} else {
				pozString = poz;
			} 
			$(this).parent().find('.counterValue').html(pozString);
			
			//special case for children
			if ($(this).parent().hasClass('children')){
				for (i=1; i<=poz; i++){
					$(this).parent().parent().parent().parent().parent().find('.age' + i).show();
				}
				for (i=poz+1; i<=8; i++){
					$(this).parent().parent().parent().parent().parent().find('.age' + i).hide();
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
					$('#room' + i).show();
				}
				for (i=poz+1; i<=5; i++){
					$('#room' + i).hide();
				}
			}
		}
		updateAllScrolls();
	});
	
	//autocomplete
	$(".autocomplete_input").autocomplete({
		source: availableTags
	});
}



function animationDone(){
	callFormEvents();
	
	/*$("#price_slider").rangeSlider({
    	arrows:false,
    	formatter:function(val){
    		return  parseInt(val) + " €";
    	}
    });*/
	
	$( "#slider-range" ).slider({
		 range: true,
		 min: 0,
		 max: 500,
		 values: [ 75, 300 ],
		 slide: function( event, ui ) {
			 $( "#amountUp" ).html( $( "#slider-range" ).slider( "values", 0 ) + " $" );
			 $( "#amountDown" ).html( $( "#slider-range" ).slider( "values", 1 ) + " $" );
		 }
	});
	$( "#amountUp" ).html( $( "#slider-range" ).slider( "values", 0 ) + " $" );
	$( "#amountDown" ).html( $( "#slider-range" ).slider( "values", 1 ) + " $" );   
	
	//open/close column
	$('a.slide').unbind();
	$('a.slide').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		if (!$(this).hasClass('active') || $(this).hasClass('assisted')){
			if ($(window).width() >= 1024){	
				$('a.slide').removeClass('active').find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
				$(this).addClass('active').find('.fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
			
				$('a.slide').parent().parent().removeClass('active');
				$(this).parent().parent().addClass('active');
			}
			
			if ($(this).hasClass('assisted')){
				$(this).find('.button_after_big_info').removeClass('active');
				$(this).find('.button_after_big_info').find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
			}
			
			var oldSlide = $('#' + $(this).attr('column-close'));
			var newSlide = $('#' + $(this).attr('column-open'));
			var url = $(this).attr('href');
			var class_bootstrap = ($(this).attr('column-class')) ? $(this).attr('column-class') : 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		} else {
			$(this).removeClass('active').find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');;
			closeSlideById('column4');
		}
	});
	
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
			
			$('#column3').hide();
			$('#column4').hide();
			$('#column3x').hide();
			$('#column3gmap').hide();
			
			var url = '';
			if ($(this).hasClass('type1')){
				url = 'include/elements/rooms_and_rates.php?page=signin&type=1'; 
			}
			if ($(this).hasClass('type2')){
				url = 'include/elements/rooms_and_rates.php?page=flight_tabs&type=2'; 
			}
			if ($(this).hasClass('type3')){
				url = 'include/elements/rooms_and_rates.php?page=signin&type=3'; 
			}
			if ($(this).hasClass('type4')){
				url = 'include/elements/rooms_and_rates.php?page=flight_tabs&type=4'; 
			}
			if ($(this).hasClass('service')){
				url = 'include/elements/service_detail.php?type=service'; 
			}
			if ($(this).hasClass('recent')){
				url = 'include/elements/load.php?page=sort_hotel?type=recent';
			}
			
			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var class_bootstrap = 'col-md-3 noborder';
			
			if ($(this).hasClass('type5')){
				oldSlide = $('#column2');
				newSlide = $('#column2');
				class_bootstrap = 'col-md-3';
				
				url = 'include/elements/rooms_and_rates_top.php'; 
			}
			
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

