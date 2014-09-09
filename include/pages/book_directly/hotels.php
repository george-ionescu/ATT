<h1 class="pull-right">Trip Information</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div id="hotel_trip" style="margin-top: 15px;">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/pages/book_directly/include/hotel.php'; ?>
		</div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/search_options_hotel.php'; ?>
		
		<div class="clearfix"></div>
		<br />
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
			var url = 'include/elements/load.php?page=sort_hotel';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>