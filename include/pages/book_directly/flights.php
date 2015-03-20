<h1 class="pull-right hide_on_mobile">Trip Information</h1>
<h1 class="pull-right hide_on_desktop">Flights</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div style="height:40px; margin-top:3px;">
			<table class="full_width">
				<tr>
					<td style="text-align:left; width: 120px;"><label class="radio-inline" style="float:none;"><input type="radio" id="tripType1" name="gr" value="option1" checked><span class="check"></span>&nbsp;&nbsp;round trip </label></td>
					<td style="text-align:left;"><label class="radio-inline" style="float:none;"><input type="radio" id="tripType2" name="gr" value="option2"><span class="check"></span>&nbsp;&nbsp;one way</label></td>
					<?php if (1 == 2) { ?>
						<td style="text-align:right;"><label class="radio-inline" style="float:none;"> multi city &nbsp;&nbsp;<input type="radio" id="tripType3" name="gr" value="option3"><span class="check"></span> </label></td>
					<?php } ?>
				</tr>
			</table>
		</div>
		<div class="clearfix"></div>
		
		<div id="round_trip" class="form_tab">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/pages/book_directly/include/round_trip.php'; ?>
		</div>
		<div id="one_way" class="form_tab" style="display:none;">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/pages/book_directly/include/one_way.php'; ?>
		</div>
		<div id="multi_city" class="form_tab" style="display:none;">
			<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/pages/book_directly/include/multi_city.php'; ?>
		</div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/search_options_flight.php'; ?>
		
		<div class="clearfix"></div>
		<button id="submit_button" type="submit" data-loading-text="please wait" class="btn btn-default proceed_button">proceed</button>
	</form>
</div>

<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var url = 'include/elements/load.php?page=sort_flight';
			var class_bootstrap = 'col-md-6';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
		
		$('#tripType1').click(function(){
			$('#round_trip').show();
			$('#one_way').hide();
			$('#multi_city').hide();

			updateAllScrolls();
			resetChildAges();
			closeSearchOptions();
		});
		$('#tripType2').click(function(){
			$('#round_trip').hide();
			$('#one_way').show();
			$('#multi_city').hide();

			updateAllScrolls();
			resetChildAges();
			closeSearchOptions();
		});
		$('#tripType3').click(function(){
			$('#round_trip').hide();
			$('#one_way').hide();
			$('#multi_city').show();

			updateAllScrolls();
			resetChildAges();
			closeSearchOptions();
		});
	});
</script>