<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="my_account.php"></a> Trip Information</h1>
</div>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div id="hotel_trip">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/pages/my_account/include/hotel_favorite.php'; ?>
		</div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/search_options_hotel.php'; ?>
		
		<div class="clearfix"></div>
		<br />
		<button id="submit_button" type="submit" class="btn btn-default proceed_button">proceed</button>
	</form>
</div>

<script>
	function closePage(){
		url = 'include/pages/book_directly/flights.php';
		$.get(url, function( data ) {
			hidePreloader();
			$('#column1').show();
			$('#column1').html(data);
			
			closeSlideById('column2');
	
			$('#info_button').hide();
			$('#sort_button').hide();
			$('#sort_wrapper').html("");
		});
	}
	
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			var oldSlide = $('#column4');
			var newSlide = $('#column4');
			var url = 'include/elements/load.php?page=sort_hotel';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>