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
	
	
	
	
	
	
	<h1 class="pull-right nomargin_right" style="background-color: transparent;">Paris hotel info</h1>
	<div class="clearfix"></div>
	
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting
		industry. Lorem Ipsum has been the industry's standard dummy text ever
		since the 1500s, when an unknown printer took a galley of type and
		scrambled it to make a type specimen book. It has survived not only
		five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with
		the release of Letraset sheets containing Lorem Ipsum passages, and
		more recently with desktop publishing software like Aldus PageMaker
		including versions of Lorem Ipsum.
	</p>
	
	<a href="#"><img id="demo" class="img-responsive" src="images/paris.png" alt="" /></a>
</div>
	
	
<script>
	$(function(){
		$('#column1').addClass('column_disabled').prepend("<div class='column_disabled2'></div>");
		$('#column2').addClass('column_disabled').prepend("<div class='column_disabled2'></div>");
	});
	
	$('#demo').click(function(event){
		event.preventDefault();

		$('#column1').removeClass('column_disabled');
		$('#column2').removeClass('column_disabled');
		$('.column_disabled2').remove();
	
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
	