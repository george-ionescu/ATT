<h1 class="pull-right">Trip details</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<div style="text-align: center;margin-top:10px;"><img class="img-responsive" src="images/paris_big.png" alt="" /></div>
	<br />
	
	<h1 class="pull-left" style="color:#000; font-size:30px;">Great time in Paris</h1>
	<button id="submit_button_trip" type="button" class="btn btn-big pull-right">select trip</button>
	<div class="clearfix"></div>
	
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting
		industry. Lorem Ipsum has been the industry's standard dummy text ever
		since the 1500s, when an unknown printer took a galley of type and
		scrambled it to make a type specimen book. It has survived not only
		five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with
		the release of Letraset sheets containing Lorem Ipsum passages, and
		more recently with desktop publishing software like Aldus PageMaker
		including versions of Lorem Ipsum.</p>
</div>

<script>
	$(function(){
		$('#submit_button_trip').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column1');
			var newSlide = $('#column1');
			var url = 'include/elements/sort_trip.php';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				closeAllSlidesAndOpen2(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>