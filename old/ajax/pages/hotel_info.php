<h1 class="pull-right">Hotel Info</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<p>
		<strong>Adress:</strong> 22 Park Lane, London, W1K 1BE<br />
		<br />
		<strong>Phone:</strong> +44 20 7493 8000<br />
		<br />
		<strong>E-mail:</strong> office@hilton.co.uk
	</p>
	<br />
	<p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting
		industry. Lorem Ipsum has been the industry's standard dummy text ever
		since the 1500s, when an unknown printer took a galley of type and
		scrambled it to make a type specimen book. It has survived not only
		five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with
		the release of Letraset sheets containing Lorem Ipsum passages, and
		more recently with desktop publishing software like Aldus PageMaker
		including versions of Lorem Ipsum.</p>
		
	<h1 class="pull-right" style="margin-right: 0px;">Hotel Photos</h1>
	<div class="clearfix"></div>
	
	<div style="text-align: center;">
		<img src="images/hotel_photos.png" alt="" />
	</div>
	
	<div class="pull-right">
		<a href="javascript:closeCustom();"><i class="fa fa-times-circle-o"></i>close</a>
	</div>
	<div class="clearfix"></div>
</div>


<script>
	function closeCustom(){
		$('a.slide').removeClass('active');
		$('a.slide .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
		closeSlideById('column4');
	}
</script>