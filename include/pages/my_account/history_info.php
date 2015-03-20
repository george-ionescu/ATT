<div class="column_content padding_column_content full_height">
	<div style="position:relative;">
		<h1 class="pull-right nomargin_right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> Your trip</h1>
	</div>
	<div class="clearfix"></div>
	
	<p style="text-align: left;">
		        <strong style="color: #fff;">Travellers and Accommodation</strong><br />
May 15, 2014 - May 21, 2014<br />
Marriott Potcoava, Calea Victoriei 21<br />
Expensive apartment with continental breakfast, 2 adults, 1 child<br />
Chip cubicle, 1 adult<br />

<br />
</p>
<p style="text-align: center;"><strong style="color: #fff;">Total price: 2332 euro</strong></p>

<br />
<a href="">request invoice</a> | <a href="">request travel vouchers</a>
<br />
<a href=""><i class="ionicons ion-ios-close-outline"></i>remove from history</a>
</div>	


<script>
	function closePage(){
		url = 'include/pages/my_account/history.php';
		$.get(url, function( data ) {
			hidePreloader();
			$('#column2').show();
			$('#column2').html(data);
			
			closeSlideById('column3');
	
			$('#info_button').hide();
			$('#sort_button').hide();
			$('#sort_wrapper').html("");
		});
	}
</script>	