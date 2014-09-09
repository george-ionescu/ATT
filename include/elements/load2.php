<h1 style="text-align: center;">Please wait...</h1>

<div class="column_content padding_column_content full_height">
	<div class="preloader_container">
		<div class="windows8">
			<div class="wBall" id="wBall_1">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_2">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_3">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_4">
				<div class="wInnerBall"></div>
			</div>
			<div class="wBall" id="wBall_5">
				<div class="wInnerBall"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	
	
	
	
	
	
	<h1 class="pull-right nomargin_right">No results</h1>
	<div class="clearfix"></div>
	
	<p>No results found with this information. Please change your search criteria.</p>
</div>
	
	
<script>
	$('#demo').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'include/elements/<?php echo $_GET['page']; ?>.php';
		var class_bootstrap = 'col-md-3';

		if (url == 'include/elements/sort_flight_week.php'){
			class_bootstrap = 'col-md-3 flight';
		}
		if (url == 'include/elements/sort_hotel_week.php'){
			class_bootstrap = 'col-md-3 hotel';
		}
		if (url == 'include/elements/sort_flight_hotel_week.php'){
			class_bootstrap = 'col-md-3 hotel';
		}
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	});
</script>	
	