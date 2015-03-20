<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="my_account.php"></a> Account Overview</h1>
</div>
<div class="clearfix"></div>
        
<div class="column_content padding_column_content full_height">
	<br /><br />
	<p style="color:#fff; font-size:18px;">Hello <em>display name</em> this is your travel report for 2015</p>
	<br />
	<p style="color:#fff; font-size:18px;">You travelled for <strong>x</strong> days, visited <strong>x</strong> cities in <strong>x</strong> countries and had <strong>x</strong> activities.</p>
	<br />
	<p style="color:#fff; font-size:18px;">You have not travelled in 2015 yet.</p>

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
</script>
