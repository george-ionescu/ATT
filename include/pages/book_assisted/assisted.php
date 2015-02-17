<h1 class="pull-right">Trip Information</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height form_tab">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div id="hotel_trip" style="margin-top: 15px;">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/pages/book_directly/include/hotel_flight.php'; ?>
		</div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/search_options_flight_hotel.php'; ?>		
		
		<div class="clearfix"></div>
		<button id="submit_button" type="submit" class="btn btn-default proceed_button">proceed</button>
	</form>
</div>

<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var url = 'include/elements/load.php?page=sort_flight_hotel';
			var class_bootstrap = 'col-md-6';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});

		$('.button_after_big_info').click(function(event){
			event.preventDefault();
			event.stopPropagation();

			var old = $(this);
			$('.slide.active').each(function(){
				if ($(this) != old){
					$(this).removeClass('active');
					$(this).find('.button_after_big_info').removeClass('active');
					$(this).find('.button_after_big_info').find('.ionicons').removeClass('ion-ios-minus-outline').addClass('ion-ios-plus-outline');
				}
			});
			
			
			if (!$(this).hasClass('active')){
				$(this).addClass('active');
				$(this).parent().addClass('active');
				$(this).find('.ionicons').removeClass('ion-ios-plus-outline').addClass('ion-ios-minus-outline');
				
				var oldSlide = $('#column2');
				var newSlide = $('#column2');
				var url = 'include/pages/book_assisted/assisted_info.php';
				var class_bootstrap = 'col-md-6';
				
				if (oldSlide && newSlide && url != '#'){
					changeSlide(oldSlide, newSlide, url, class_bootstrap);
				}
			} else {
				$(this).removeClass('active');
				$(this).parent().removeClass('active');
				$(this).find('.ionicons').removeClass('ion-ios-minus-outline').addClass('ion-ios-plus-outline');

				closeSlideById('column2');
			}
		});
	});
</script>