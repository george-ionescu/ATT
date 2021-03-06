/**
 * jQuery.browser.mobile (http://detectmobilebrowser.com/)
 *
 * jQuery.browser.mobile will be true if the browser is a mobile device
 *
 **/

var slideArray = [
        // Slideshow Images
		{src : 'backgrounds/background_1.jpg', fade: 1000, title : 'london', subtitle : 'from 300 euro', url : 'http://www.google.ro/'},
		{src : 'backgrounds/background_2.jpg', fade: 1000, title : 'paris', subtitle : 'from 400 euro', url : 'http://www.yahoo.ro/'},
]

function loadBackgroundSlideshow(slideArray){
	$('#slide-list').empty();
	for (index = 0; index < slideArray.length; ++index) {
	    //console.log(a[index]);
		if ($('#slide-list').length > 0){
			if (index == 0){
				$('#slide-list').append('<li id="slide-link-0" class="slide-link current-slide"><a></a></li>');
			} else {
				$('#slide-list').append('<li id="slide-link-' + index + '" class="slide-link"><a></a></li>');
			}
		}
	}
	
	$.vegas('slideshow', {
		delay:5000,
		backgrounds: slideArray,
		walk: function(step){
			$('#slidecaption').html(slideArray[step]['title']);
			$('#slidecaption').attr('href', slideArray[step]['url']);
			$('#slide_subtitle').html(slideArray[step]['subtitle']);
			
			$('.slide-link').removeClass('current-slide');
			$('#slide-link-' + step).addClass('current-slide');
		}
	})('');
	
	$('.slide-link').click(function(){
		id = $(this).attr('id');
		id = id.replace('slide-link-', '');
		$.vegas('jump', id)
	});
}

function detectPortrait() {
    if ($(window).width() < $(window).height()) {
        return "portrait";
    }
    else {
    	return "landscape";
    }
}

function getIsTablet() {
	var md = new MobileDetect(window.navigator.userAgent);
	
	if (md.tablet()){
		return 'tablet';
	}
	if (md.mobile()){
		return 'phone';
	}
	
	return 'desktop';
}


(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada|android|ipad|playbook|silk\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

(function($){




/* ==========================================================================
   When document is ready, do
   ========================================================================== */
   
	$(document).ready(function(){
		$('.main_logo').click(function(){
			window.location = 'book_assisted.php';
		});
		
		//disable submit form on enter
		$(document).on('keyup keypress', 'form input[type="text"]', function(e) {
			if (e.which == 13){
				e.preventDefault();
			    return false;
			}
		});
		
		//force tablet to stay in landscape mode
		var newWindowWidth = $(window).width();
		if (getIsTablet() == 'tablet'){
			newWindowWidth = screen.height;
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
		
		
		//speech bubble text
		$('.marquee').marquee({
		    //speed in milliseconds of the marquee
		    duration: 50000,
		    //gap in pixels between the tickers
		    gap: 50,
		    //time in milliseconds before the marquee will start animating
		    delayBeforeStart: 1000,
		    //'left' or 'right'
		    direction: 'left',
		    //true or false - should the marquee be duplicated to show an effect of continues flow
		    duplicated: false,
		    pauseOnHover: true
		});
		
		//Vegas - full screen background
	    if (newWindowWidth < 1024){ 
	    	$.vegas('destroy');
	    } else {
	    	loadBackgroundSlideshow(slideArray);
	    }
		
		//  gMap
		// JSON
		var data = JSON.parse('[{"address":"New Street, Salisbury, UK","content":"hello world from salisbury"},{"address":"86000 Poitiers, France","content":"honeymoon, wind sports, casino games..."},{"address":"66000 Perpignam, France","content":"hello world from perpignam"}]');
		var $map = $('#google-map');
		var selectBut = '<button type="button" class="btn btn-default center-block">select</button>';
		var closeBut = '<a class="pull-right" href="javascript:closeMarkers();"><i class="ionicons ion-ios-close-outline"></i></a>';

		// Gmap Defaults
		$map.gmap3({
			defaults:{ 
	            classes:{
	              Marker:MarkerWithLabel
	            }
	        },
		    map:{
		        options:{
		            center:[46.578498,2.457275],
		            zoom: 5
		        }
		    }
		});

		// Json Loop
		$.each(data, function(key, val) {
		    $map.gmap3({
		        marker:{
		            values:[{
		                address:val.address,
		                options:{
		            		icon: "images/gmap_pin.png",
		                    labelAnchor: new google.maps.Point(13, 73),
		                    labelClass: "labels",
		                    labelStyle: {opacity: 1},
		                    labelContent: "PARIS<br /><span>and 20 more</span>"
		                },
		                events: {
		                    click: function(marker, event, context) {

		                        gmap_clear_markers();
								
								//Change the marker icon
								marker.setIcon('images/gmap_pin_sel.png');
		                        
		                         $map.gmap3({
		                            map:{
		                              options:{
		                                center:event.latLng
		                              }
		                            }
		                         });                        

		                        $(this).gmap3({
		                            overlay:{
		                                address:val.address,
		                                options:{
		                                    content:  '<div class="infobox"><table><tr><td><img src="images/gmap_img.png" style="height:131px;" /></td> <td class="text"><h1>San Francisco San Francisco</h1><p>'+val.content+'</p>'+selectBut+closeBut+'</td></tr></table></div>',
		                                    offset:{
		                                        y:-185,
		                                        x:0
		                                    }
		                                }
		                            }
		                        });
		                    }
		                },
		            }]
		        }
		    });
		});
		
		// Function Clear Markers
		function gmap_clear_markers() {
		    $('.infobox').each(function() {
		        $(this).remove();
		    });
		}
		
		
	});
	
/* ==========================================================================
   When window is loaded, do
   ========================================================================== */	
	
	$(window).load(function(){
		//init calendars fo reserve form
		for (i=1; i<=4; i++){
			$("#calendar"+i).datepicker({
		 	    dateFormat: 'dd/mm/yy',
		 	    changeMonth: true,
		        changeYear: true,
		    });
		}
		
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
        
    });
	
	
/* ==========================================================================
   When the window is scrolled, do
   ========================================================================== */
   	
	$(window).scroll(function () {
							   
		
	});
	
	/* ==========================================================================
	   When the window is resized, do
	   ========================================================================== */
	   	
	
	$(window).resize(function() {
		//force tablet to stay in landscape mode
		var newWindowWidth = $(window).width();
		if (getIsTablet() == 'tablet'){
			newWindowWidth = screen.height;
		}
		
		
	    if (newWindowWidth < 1024){ 
	    	$.vegas('destroy');
	    } else if ($(".vegas-background").length == 0 && newWindowWidth > 1024) {
	        loadBackgroundSlideshow(slideArray);
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
	});

})(window.jQuery);

// non jQuery plugins below

