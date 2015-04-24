<h1 class="pull-right">Trip Information</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div style="height:40px; margin-top:3px;">
			<table class="full_width">
				<tr>
					<td style="text-align:left;"><label class="radio-inline" style="float:none;"> round trip &nbsp;&nbsp;<input type="radio" id="tripType1" name="gr" value="option1" checked><span class="check"></span> </label></td>
					<td style="text-align:center;"><label class="radio-inline" style="float:none;"> one way &nbsp;&nbsp;<input type="radio" id="tripType2" name="gr" value="option2"><span class="check"></span> </label></td>
					<td style="text-align:right;"><label class="radio-inline" style="float:none;"> multi city &nbsp;&nbsp;<input type="radio" id="tripType3" name="gr" value="option3"><span class="check"></span> </label></td>
				</tr>
			</table>
		</div>
		<div class="clearfix"></div>
		
		<div id="round_trip">
			<?php include 'include/round_trip.php'; ?>
		</div>
		<div id="one_way" style="display:none;">
			<?php include 'include/one_way.php'; ?>
		</div>
		<div id="multi_city" style="display:none;">
			<?php include 'include/multi_city.php'; ?>
		</div>
		
		<?php include '../elements/search_options_flight.php'; ?>
		
		<div class="clearfix"></div>
		<button id="submit_button" type="submit" class="btn btn-default proceed_button">proceed</button>
	</form>
</div>

<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var url = 'ajax/pages/load_flight.php';
			var class_bootstrap = 'col-md-3';
			
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