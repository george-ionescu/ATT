<h1 class="pull-right">Trip Details</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<div style="text-align: center;margin-top:10px;"><img class="img-responsive" src="images/paris_big.png" alt="" /></div>
	<br />
	
	<h1 class="pull-left" style="color:#000; font-size:30px; margin-bottom:10px;">Great time in Paris</h1>

	<?php if (!$_GET['nosubmit'] && 1==2) { ?>
		<a href="javascript:toggleAvailability();" class="search_options availab pull-right">check availability</a>
	<?php } ?>
	
	<div class="clearfix"></div>
	<br />
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
	function openNext(){
		var oldSlide = $('#column3');
		var newSlide = $('#column3');
		var url = 'include/elements/sort_top.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	}
	
	t = setTimeout(openNext, 400);




	function toggleAvailability(){
		var oldSlide = $('#column2');
		var newSlide = $('#column1');
		var url = 'include/elements/sort_top.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen2(oldSlide, newSlide, url, class_bootstrap);
		}
	}
</script>
		