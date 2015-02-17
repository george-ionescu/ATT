<h1 class="pull-right">Paris info</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
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
	
	<a href="page1_1_1.php"><img src="images/paris.png" alt="" /></a>
	
	<br />
	<div class="pull-right">
		<a href="javascript:closeCustom();"><i class="ionicons ion-ios-close-outline"></i>close</a>
	</div>
	<div class="clearfix"></div>
</div>

<script>
	function closeCustom(){
		$('a.slide').removeClass('active');
		$('.button_after_big_info').removeClass('active');
		$('.button_after_big_info .ionicons').removeClass('ion-ios-minus-outline').addClass('ion-ios-plus-outline');
		closeSlideById('column2');
	}
</script>
	