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
var activeCalendarContainer;
var hotelObject;
var hotelContainer;
var newWindowWidth = $(window).width();


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
		
		//
		if ($('#photo_container').length){
			var $container = $('#photo_container');
			
			$container.imagesLoaded( function(){
			  $container.masonry({
			    itemSelector : '.box'
			  });
			});
	
			$(".box a").fancybox({
				'titleShow'     : false
			});
		}
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
	
	var slideId = newSlide.attr('id');
	slideId = parseInt(slideId.replace('column', ''));
	
	if (newWindowWidth < 1024){
		$("html, body").animate({ scrollTop: 0 });
		$(newSlide).animate({ scrollTop: 0 });
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
				console.log('1');
				if (routeData.indexOf("trip_info") > -1){
					console.log('2');
					$('#info_button').show();
					$('#sort_button').hide();
					$('#sort_wrapper').html(data);
					$('#sort_wrapper').height(0);
					$("#sort_wrapper").removeClass().addClass('navbar-collapse2').addClass('collapse');
				} else {
					console.log('3');
					$('#info_button').hide();
					$('#sort_button').show();
					$('#sort_wrapper').html(data);
					$('#sort_wrapper').height(0);
					$("#sort_wrapper").removeClass().addClass('navbar-collapse2').addClass('collapse');
				}
				clearInterval(t);
				openNext();
			} else {
				newSlide.html(data);
				callFormEvents();
				console.log('4');
				if ((routeData.indexOf("thank_you") > -1 || routeData.indexOf("rooms_and_rates") > -1) && newWindowWidth < 1024){
					console.log('5');
					$('#info_button').hide();
					$('#sort_button').hide();
					$('#sort_wrapper').html("");
					$('#sort_wrapper').height(0);
					$("#sort_wrapper").removeClass().addClass('navbar-collapse2').addClass('collapse');
				}
				
				if (newWindowWidth < 1024 && $('#sort_wrapper').hasClass('in')){
					$('#sort_wrapper').height(0);
					$("#sort_wrapper").removeClass().addClass('navbar-collapse2').addClass('collapse');
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
							//newSlide.find(".column_content").mCustomScrollbar('disable');
						} else {
							//newSlide.find(".column_content").mCustomScrollbar(scrollOptions);
						}
						
						if (newWindowWidth >= 1024){
							//resize column height for scroll
							$('.column_content').each(function(){
								if ($(this).hasClass('no_margin_scroll')){
						    		h = $(window).height() - $('.header').height() - $('.footer').height();
						    	} else {
						    		h = $(window).height() - $('.header').height() - $('.footer').height() - 60;
						    	}
								$(this).height(h);	
							});
						}
						
						$(".column_content").bind('scroll', function() {
						   columnScrollAction();
						}); 
						
						
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
				if (newWindowWidth >= 1024){
					console.log('disable scroll');
					//newSlide.find(".column_content").mCustomScrollbar('disable');
				} else {
					//newSlide.find(".column_content").mCustomScrollbar(scrollOptions);
				}
				
				if (newWindowWidth >= 1024){
					//resize column height for scroll
					$('.column_content').each(function(){
						if ($(this).hasClass('no_margin_scroll')){
				    		h = $(window).height() - $('.header').height() - $('.footer').height();
				    	} else {
				    		h = $(window).height() - $('.header').height() - $('.footer').height() - 60;
				    	}
						$(this).height(h);	
					});
					$('.column_content').height(h);
				}
				
				$(".column_content").bind('scroll', function() {
				   columnScrollAction();
				}); 
				
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

function closeCompare(){
	closeSlideById('column3x');
}

function closeGoogleMaps(){
	closeSlideById('column3gmap');
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
	/*if ($(window).width() < 1024){
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
	}*/
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
		$('.search_options').html('<i class="ionicons ion-ios-plus-outline"></i>more options');
	} else {
		$('.search_options').html('<i class="ionicons ion-ios-minus-outline"></i>less options');
	}
	updateAllScrolls();
}
function closeSearchOptions(){
	$('#search_options').hide();
	if (!$('#search_options').is(':visible')){
		$('.search_options').html('<i class="ionicons ion-ios-plus-outline"></i>more options');
	} else {
		$('.search_options').html('<i class="ionicons ion-ios-minus-outline"></i>less options');
	}
	updateAllScrolls();
}

function toggleChildrenDetail(id){
	if (id){
		$('#' + id).find('.children_detail').toggle();
		if (!$('#' + id).find('.children_detail').is(':visible')){
			$('#' + id).find('.ionicons').removeClass('ionicons ion-ios-minus-outline').addClass('ionicons ion-ios-plus-outline');
		} else {
			$('#' + id).find('.ionicons').removeClass('ionicons ion-ios-plus-outline').addClass('ionicons ion-ios-minus-outline');
		}
	} else {
		$('.children_detail').toggle();
		if (!$('.children_detail').is(':visible')){
			$('.detail_button .ionicons').removeClass('ionicons ion-ios-minus-outline').addClass('ionicons ion-ios-plus-outline');
		} else {
			$('.detail_button .ionicons').removeClass('ionicons ion-ios-plus-outline').addClass('ionicons ion-ios-minus-outline');
		}
	}
	
	
	updateAllScrolls();
}

function showRegisterPopUp(){
	showPreloader();
	$.get( "include/pages/my_account/register.php", function( data ) {
		hidePreloader();
		createWindow('dialog_ajax', '', data, 320, 290);
	});
}
function showCreateAccountPopUp(){
	showPreloader();
	$.get( "include/pages/my_account/create-account.php", function( data ) {
		hidePreloader();
		createWindow('dialog_ajax', '', data, 320, 290);
	});
}
function showLostPassword(){
	showPreloader();
	$.get( "include/pages/my_account/lost-password.php", function( data ) {
		hidePreloader();
		createWindow('dialog_ajax', '', data, 320, 290);
	});
}

function resetChildDetails(){
	$('.children_detail').hide();
	$('.detail_button .ionicons').removeClass('ionicons ion-ios-minus-outline').addClass('ionicons ion-ios-plus-outline');
	updateAllScrolls();
}

function resetChildAges(){
	resetChildDetails();
	
	for (i=1; i<=5; i++){
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
	$(".custom_form input:checkbox, .custom_form input:radio").each(function(){
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
		event.stopPropagation();
		
		$(this).closest('.form_tab').find(".datepicker").hide();
		
		activeCalendarContainer = $(this);
		
		var targetDiv = $(this).attr('targetdiv');
		$(this).closest('.form_tab').find("#datepicker_" + targetDiv).show();
		$(this).closest('.form_tab').find('.open_calendar').each(function(){
			if (targetDiv != 'single'){
				$(this).parent().parent().addClass('disabled_div');
			}
			$(this).parent().parent().addClass('nomargin_bottom');
		});
		$(this).removeClass('disabled_div');
	});
	
    //datepicker
	$(".datepicker").each(function(){
		if ($(this).attr('id') == 'datepicker_single'){
			$(this).datepicker({
		    	dateFormat: 'dd M yy',
				changeMonth: true,
			    changeYear: true,
			    onSelect: function(dateText){
					$('.datepicker').each(function(){
			    		if ($(this).is(':visible')){
			    			//write value in box
					        var tmpData = dateText.split(" ");
					        
					        $(this).closest('.form_tab').find('.open_calendar').each(function(){
								if ($(this).parent().parent().attr('targetdiv') == 'single'){
									$(this).parent().parent().find('.day').html(tmpData[0]);
									$(this).parent().parent().find('.month').html(tmpData[1]);
									$(this).parent().parent().find('.year').html(tmpData[2]);
								}
							});
			    		}
			    	});
			    	$(".datepicker").hide();
			    	//
			    	$('.custom_input_slide').removeClass('disabled_div');
					$('.custom_input_slide').removeClass('nomargin_bottom');
			        //
					$(this).closest('.row_form_calendar').find( "#datepicker_to" ).datepicker( "option", "minDate", dateText );
			    }
		    });
			$(this).hide();
		}
		if ($(this).attr('id') == 'datepicker_from'){
			$(this).datepicker({
		    	dateFormat: 'dd M yy',
				changeMonth: true,
			    changeYear: true,
			    minDate: 0,
			    onSelect: function(dateText){
			    	$('.datepicker').each(function(){
			    		if ($(this).is(':visible')){
			    			//write value in box
					        var tmpData = dateText.split(" ");
					        //next day
					        var today = new Date();
					        today.setDate(tmpData[0]);
					        var tomorrow = new Date();
					        tomorrow.setDate(today.getDate()+1);
					        var tmpData2 = String(tomorrow).split(" ");
					        
					        $(this).closest('.form_tab').find('.open_calendar').each(function(){
								if ($(this).parent().parent().attr('targetdiv') == 'from'){
									$(this).parent().parent().find('.day').html(tmpData[0]);
									$(this).parent().parent().find('.month').html(tmpData[1]);
									$(this).parent().parent().find('.year').html(tmpData[2]);
								}
								if ($(this).parent().parent().attr('targetdiv') == 'to'){
									$(this).parent().parent().find('.day').html(tmpData2[2]);
									$(this).parent().parent().find('.month').html(tmpData2[1]);
									$(this).parent().parent().find('.year').html(tmpData2[3]);
								}
							});
			    		}
			    	});
			    	$(".datepicker").hide();
			    	//
			    	$('.custom_input_slide').removeClass('disabled_div');
					$('.custom_input_slide').removeClass('nomargin_bottom');
			        //
			        $(this).closest('.row_form_calendar').find( "#datepicker_to" ).datepicker( "option", "minDate", dateText );

			    }
		    });
			$(this).hide();
		}
		if ($(this).attr('id') == 'datepicker_to'){
			$(this).datepicker({
		    	dateFormat: 'dd M yy',
				changeMonth: true,
			    changeYear: true,
			    minDate: 0,
			    onSelect: function(dateText){
			    	$('.datepicker').each(function(){
			    		if ($(this).is(':visible')){
			    			//write value in box
					        var tmpData = dateText.split(" ");
					        $(this).closest('.form_tab').find('.open_calendar').each(function(){
								if ($(this).parent().parent().attr('targetdiv') == 'to'){
									$(this).parent().parent().find('.day').html(tmpData[0]);
									$(this).parent().parent().find('.month').html(tmpData[1]);
									$(this).parent().parent().find('.year').html(tmpData[2]);
								}
							});
			    		}
			    	});
			    	$(".datepicker").hide();
			    	//
			        $('.custom_input_slide').removeClass('disabled_div');
					$('.custom_input_slide').removeClass('nomargin_bottom');
			        //
					$(this).closest('.row_form_calendar').find( "#datepicker_from" ).datepicker( "option", "maxDate", dateText );
			    }
		    });
			$(this).hide();
		}
	});
	

    
    //adult & children select
    $('.custom-dropdown select').change(function(event){
    	event.preventDefault();
		event.stopPropagation();
		
    	if ($(this).attr('id') == 'counterAdult'){
    		nrAdult = parseInt($(this).val());
    		nrChildren = parseInt($(this).closest('.row_form_adult').find('#counterChildren').val());
    		
    		console.log(nrAdult);
    		console.log(nrChildren);
    		
    		//restrict
    		if (!$(this).closest('.row_form_adult').hasClass('hotel_form')){
    			maxPerson = 9;
    			
    			$(this).closest('.row_form_adult').find('#counterChildren').html('');
        		for (i=0; i<=(maxPerson-nrAdult); i++){
        			if (i==nrChildren){
        				$(this).closest('.row_form_adult').find('#counterChildren').append("<option value='"+i+"' selected>0"+i+"</option>");
        			} else {
        				$(this).closest('.row_form_adult').find('#counterChildren').append("<option value='"+i+"'>0"+i+"</option>");
        			}
        		}
    		}
    		
    		
    		
    		//special case for children
    		if ($(this).closest('.custom_input_slide_content').hasClass('children')){
    			for (i=1; i<=nrChildren; i++){
    				$(this).closest('.row_form').parent().find('.age' + i).show();
    			}
    			for (i=nrChildren+1; i<=9; i++){
    				$(this).closest('.row_form').parent().find('.age' + i).hide();
    			}
    			
    			if (nrChildren == 0){
    				$(this).parent().parent().find('.detail_button').hide();
    			} else {
    				$(this).parent().parent().find('.detail_button').show();
    			}
    		}
    	}
    	if ($(this).attr('id') == 'counterChildren'){
    		nrAdult = parseInt($(this).closest('.row_form_adult').find('#counterAdult').val());
    		nrChildren = parseInt($(this).val());
    		
    		console.log(nrAdult);
    		console.log(nrChildren);
    		
    		//restrict
    		if (!$(this).closest('.row_form_adult').hasClass('hotel_form')){
    			maxPerson = 9;
    			
    			$(this).closest('.row_form_adult').find('#counterAdult').html('');
        		for (i=1; i<=(maxPerson-nrChildren); i++){
        			if (i==nrAdult){
        				$(this).closest('.row_form_adult').find('#counterAdult').append("<option value='"+i+"' selected>0"+i+"</option>");
        			} else {
        				$(this).closest('.row_form_adult').find('#counterAdult').append("<option value='"+i+"'>0"+i+"</option>");
        			}
        		}
    		}
    		
    		//special case for children
    		if ($(this).closest('.custom_input_slide_content').hasClass('children')){
    			for (i=1; i<=nrChildren; i++){
    				$(this).closest('.row_form').parent().find('.age' + i).show();
    			}
    			for (i=nrChildren+1; i<=9; i++){
    				$(this).closest('.row_form').parent().find('.age' + i).hide();
    			}
    			
    			if (nrChildren == 0){
    				$(this).parent().parent().find('.detail_button').hide();
    			} else {
    				$(this).parent().parent().find('.detail_button').show();
    			}
    		}
    	}
    	if ($(this).attr('id') == 'counterRoom'){
    		nrRoom = parseInt($(this).val());
        	
        	//special case for room
    		if ($(this).closest('.custom_input_slide_content').hasClass('room')){
    			for (i=1; i<=nrRoom; i++){
    				$('#room' + i).show();
    			}
    			for (i=nrRoom+1; i<=5; i++){
    				$('#room' + i).hide();
    			}
    			
    			if (nrRoom > 1){
    				$('#room1 .flight_title').show();
    			} else {
    				$('#room1 .flight_title').hide();
    			}
    		}
    	}
    });
    
    
    
    
    
    
    
    
    
    //counter up/down
    /*$('.counterUp').unbind();
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
	});*/
	
	//autocomplete
	var substringMatcher = function(strs) {
	  return function findMatches(q, cb) {
		var matches, substrRegex;
	 
		// an array that will be populated with substring matches
		matches = [];
	 
		// regex used to determine if a string contains the substring `q`
		substrRegex = new RegExp(q, 'i');
	 
		// iterate through the pool of strings and for any string that
		// contains the substring `q`, add it to the `matches` array
		$.each(strs, function(i, str) {
		  if (substrRegex.test(str)) {
			// the typeahead jQuery plugin expects suggestions to a
			// JavaScript object, refer to typeahead docs for more info
			matches.push({ value: str });
		  }
		});
	 
		cb(matches);
	  };
	};
	 
	var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
	  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
	  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
	  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
	  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
	  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
	  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
	  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
	  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
	];
	 
	$('.autocomplete_input').typeahead({
		source: states
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
	
	/*$( "#slider-range" ).slider({
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
	$( "#amountDown" ).html( $( "#slider-range" ).slider( "values", 1 ) + " $" ); */
	
	$("#slider-range").noUiSlider({
		start: [73, 200],
		connect: true,
		step: 1,
		range: {
			'min': 0,
			'max': 500
		}
	}, true);
	$('#slider-range').Link('lower').to($('#amountUp'));
	$('#slider-range').Link('upper').to($('#amountDown'));
	
	//open/close column
	$('a.slide').unbind();
	$('a.slide').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		if (!$(this).hasClass('active') || $(this).hasClass('assisted')){
			if ($(window).width() >= 1024){	
				if ($(this).hasClass('account_overview')){
					$('a.account_overview').removeClass('active');
					$(this).addClass('active');
				} else {
					$('a.slide').removeClass('active').find('.ionicons').removeClass('ionicons ion-ios-minus-outline').addClass('ionicons ion-ios-plus-outline');
					$(this).addClass('active').find('.ionicons').removeClass('ionicons ion-ios-plus-outline').addClass('ionicons ion-ios-minus-outline');
				}
				
				$('a.slide').closest().parent().parent().removeClass('active');
				$(this).parent().parent().addClass('active');
			}
			
			if ($(this).hasClass('assisted')){
				$(this).find('.button_after_big_info').removeClass('active');
				$(this).find('.button_after_big_info').find('.ionicons').removeClass('ionicons ion-ios-minus-outline').addClass('ionicons ion-ios-plus-outline');
			}
			
			var oldSlide = $('#' + $(this).attr('column-close'));
			var newSlide = $('#' + $(this).attr('column-open'));
			var url = $(this).attr('href');
			var class_bootstrap = ($(this).attr('column-class')) ? $(this).attr('column-class') : 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		} else {
			$(this).removeClass('active').find('.ionicons').removeClass('ionicons ion-ios-minus-outline').addClass('ionicons ion-ios-plus-outline');;
			closeSlideById('column4');
		}
	});
	
	//open hotel detail
	$('.hotel_detail').unbind();
	$('.hotel_detail').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		if (!$(this).hasClass('favorite') && !$(this).hasClass('top_pics')){
			var foo = false;
			if ($('#flight_content').is(':visible') || $('#compare_content').is(':visible') || $('#column3gmap').is(':visible')){
				foo = true;
			}
			
			if (!$(this).hasClass('active') || foo){
				$('.special_link a').removeClass('active');
				$('.hotel_detail').removeClass('active');
				$('.hotel_detail').removeClass('special');
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
					if ($(this).hasClass('weekend_hotel')){
						url = 'include/elements/rooms_and_rates.php?page=signin&type=3&from=weekend_hotel'; 
					} else {
						url = 'include/elements/rooms_and_rates.php?page=signin&type=3'; 
					}
				}
				if ($(this).hasClass('type4')){
					url = 'include/elements/rooms_and_rates.php?page=flight_tabs&type=4'; 
				}
				if ($(this).hasClass('service')){
					url = 'include/elements/service_detail.php?type=service'; 
				}
				if ($(this).hasClass('recent')){
					url = 'include/elements/load.php?page=sort_hotel.php?type=recent';
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
		}
	});
	
	//open hotel special functions
	$('.hotel_detail a').unbind();
	$('.hotel_detail a').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		if (newWindowWidth < 1024){
			$("html, body").animate({ scrollTop: 0 });
		}
		
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
			$('.special_link a').removeClass('active');
			$('.hotel_detail').removeClass('active');
			$('.hotel_detail').removeClass('special');
			
			if (newWindowWidth >= 1024){	
				$(this).addClass('active');
				if (!$(this).closest('.hotel_detail').hasClass('top_pics')){
					$(this).closest('.hotel_detail').addClass('active').addClass('special');
				}
			}
			
			
			$('#column3').hide();
			$('#column4').hide();
			$('#column3x').hide();
			$('#column3gmap').hide();
			
			if ($(this).hasClass('map')){
				if ($(this).closest('.hotel_detail').hasClass('top_pics')){
					$('#column2').hide();
					openSlide($('#column3gmap'), null, 'col-md-9');
				} else {
					openSlide($('#column3gmap'), null, 'col-md-6');
				}
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
				
				if (newWindowWidth >= 1024){
					$('#compare_content').css('margin-top', marginTop);
					$('#compare_content').height(hotelObject.height() + 10);
				}
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
				
				if (newWindowWidth >= 1024){
					$('#flight_content').css('margin-top', marginTop);
				}
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
			
			if ($(this).closest('.hotel_detail').hasClass('top_pics')){
				$('#column2').show();
			}
		}
	});
	
	
	activateMoreLess();
	updateAllScrolls();
}

function columnScrollAction(){
	if (newWindowWidth >= 1024){
		if (hotelObject && hotelContainer){
			marginTop = hotelObject.offset().top - $('.header').height(); 
			//stick to bottom
			var diff = 0;
			console.log(marginTop + hotelContainer.height());
			if ((marginTop + hotelContainer.height()) > ($('#column2').height() - $('.footer').height() + 10)){
				diff = marginTop + hotelContainer.height() - $('#column2').height() + $('.footer').height() - 30;
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
				hotelContainer.height(hotelObject.height() + 10);
			}
		}
	}
}



$(".column_content").bind('scroll', function() {
   columnScrollAction();
}); 

$(document).ready(function(){
	animationDone();
});

$(window).resize(function() {
	if (newWindowWidth >= 1024){
		if (hotelObject && hotelContainer){
			if (hotelContainer.attr('id') == 'compare_content'){
				hotelContainer.height(hotelObject.height() + 10);
			}
			columnScrollAction();
		}
	}
});

