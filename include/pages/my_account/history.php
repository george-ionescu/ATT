<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="my_account.php"></a> Booking History</h1>
</div>
<div class="clearfix"></div>
        
        <div class="column_content nopadding full_height">
	    	<div class="row">
				<div class="col-md-12 col-xs-12 nopadding">
					<a id="but1" class="slide button_big pull-right account_overview" column-class="col-md-3 noborder" column-close="column3" column-open="column3" href="include/pages/my_account/history_info.php">
						<span class="sidebar">Paris</span>
						<span class="subtitle2">- coming - </span>
						<span class="subtitle">16 Aug 2014 - 20 Aug 2014</span>
						<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12 nopadding">
					<a id="but2" class="slide button_big pull-right account_overview" column-class="col-md-3 noborder" column-close="column3" column-open="column3" href="include/pages/my_account/history_info.php">
						<span class="sidebar">Londra</span>
						<span class="subtitle2">- under way -</span>
						<span class="subtitle">16 Aug 2014 - 20 Aug 2014</span>
						<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12 nopadding">
					<a id="but3" class="slide button_big pull-right account_overview" column-class="col-md-3 noborder" column-close="column3" column-open="column3" href="include/pages/my_account/history_info.php">
						<span class="sidebar">Madrid</span>
						<span class="subtitle2">- done -</span>
						<span class="subtitle">16 Aug 2014 - 20 Aug 2014</span>
						<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
					</a>
				</div>
			</div>
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