<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> Room Policy</h1>
</div>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<h1 class="pull-left">Hotel Remarks</h1>
	<div class="clearfix"></div>
	
	<p>Please note: You may arrive any time until 11p.m
	when the hotel closes. If you expect to arrive
	after 11p.m, you must contact the hotel directly
	in advance to make the necessary arrangements.</p>
	
	<h1 class="pull-left">Cancelation Policy</h1>
	<div class="clearfix"></div>
	
	<p>This reservation is already subject
	to cancellation penalties</p>
	
	<p>Cancelling this booking<br />
	incurs a 229,90 EUR penalty.<br />
	<br />
	Online cancellation<br />
	will be blocked after 21-Nov-2013 00:00.</p>
	
	<div class="hide_on_mobile pull-right">
		<a href="javascript:closeCustom();"><i class="ionicons ion-ios-close-outline"></i>close</a>
	</div>
	<div class="clearfix"></div>
</div>

<script>
	function closeCustom(){
		$('a.slide').removeClass('active');
		$('a.slide .ionicons').removeClass('ion-ios-minus-outline').addClass('ion-ios-plus-outline');
		closeSlideById('column4');
	}

	function closePage(){
		url = 'include/elements/rooms_and_rates.php?page=signin&type=<?php echo $_GET['type']; ?>';
		$.get(url, function( data ) {
			hidePreloader();
			$('#column3').show();
			$('#column3').html(data);
			
			closeSlideById('column4');
		});
	}
</script>