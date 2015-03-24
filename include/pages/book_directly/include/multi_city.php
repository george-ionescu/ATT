<div class="number_of_flights_container">
	<span class="title pull-left">Flights</span>
	<label class="radio-inline"> <input type="radio" id="inlineCheckbox1" name="fl" value="option1" checked><span class="check border"></span> x2</label> 
	<label class="radio-inline"> <input type="radio" id="inlineCheckbox2" name="fl" value="option2"><span class="check border"></span> x3</label> 
	<label class="radio-inline"> <input type="radio" id="inlineCheckbox3" name="fl" value="option3"><span class="check border"></span> x4</label> 
	<label class="radio-inline"> <input type="radio" id="inlineCheckbox4" name="fl" value="option4"><span class="check border"></span> x5</label>
</div> 

<?php $countArray = array('1st', '2nd', '3rd', '4th', '5th'); ?>
<?php for ($i=1; $i<=5; $i++) { ?>
	<div id="flight<?php echo $i; ?>" <?php if ($i>2) echo "style='display:none;'"; ?>>
		<p class="flight_title"><?php echo $countArray[$i-1]; ?> flight</p>
		
		<div class="form-group has-success has-feedback">
			<label class="control-label input_label col-sm-3 col-xs-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;from:</label>
			<div class="col-sm-9 col-xs-9 no_padding_left_right">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city/airport name"> 
				<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
			</div>
		</div>
		<div class="form-group has-error has-feedback">
			<label class="control-label input_label col-sm-3 col-xs-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;to:</label>
			<div class="col-sm-9 col-xs-9 no_padding_left_right">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city/airport name"> 
				<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
			</div>
		</div>
		
		<div class="row_form">
			<div class="col-md-6 col-xs-6 short_padding pull-left">
				<div class="custom_input_slide" targetdiv="from" style="margin-top:25px; height:85px;">

					<p class="box_title">depart</p>
					<div class="custom_input_slide_content">
						<div id="datepicker_from" class="datepicker"></div>
						<div class="pull-left">
							<span class="day number_big pull-left">01</span>
							<div class="number_small pull-left">
								<input type="hidden" class="calendar_value" name="" />
								<p class="month">Dec</p>
								<p class="year">2014</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<a href="#" class="open_calendar arrow_right pull-left"><i class="fa fa-caret-down"></i></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-6 short_padding pull-left">
				<div class="custom_input_slide" style="background: none;padding:0;">
					<p style="color: #fff;margin-bottom:5px;text-align:right;">flight time</p>
					<div style="margin-bottom: 5px;">
						<span class="custom-dropdown">
						    <select>
						        <option>departure</option>
						        <option>Option 2</option>  
						        <option>Option 3</option>
						        <option>Option 4</option>
						        <option>Option 5</option>
						    </select>
						</span>
					</div>
					<span class="custom-dropdown">
					    <select>
					        <option>anytime</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php } ?>




<br />
<div class="row_form">
	<div class="col-md-6 col-xs-6 short_padding pull-left">
		<div class="custom_input_slide">
			<p class="box_title">adults</p>
			<div class="custom_input_slide_content center">
				<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
				<div class="pull-left">
					<span class="counterValue number_big pull-left">01</span>
					<div class="clearfix"></div>
				</div>
				<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xs-6 short_padding pull-left">
		<div class="custom_input_slide">
			<p class="box_title pull-left">children</p>
			<a href="javascript:toggleChildrenDetail();" class="detail_button pull-right"><i class="fa fa-plus-circle"></i>info</a>
			<div class="clearfix"></div>
			
			<div class="custom_input_slide_content children center">
				<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
				<div class="pull-left">
					<span class="counterValue number_big pull-left">01</span>
					<div class="clearfix"></div>
				</div>
				<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/include/children_detail.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/include/child_ages.php'; ?>
<div class="clearfix"></div>

<script>
$(function(){
	$('#inlineCheckbox1').click(function(){
		for (i=1; i<=2; i++){
			$('#flight' + i).show();
		}
		for (i=3; i<=5; i++){
			$('#flight' + i).hide();
		}

		updateAllScrolls();
	});
	$('#inlineCheckbox2').click(function(){
		for (i=1; i<=3; i++){
			$('#flight' + i).show();
		}
		for (i=4; i<=5; i++){
			$('#flight' + i).hide();
		}

		updateAllScrolls();
	});
	$('#inlineCheckbox3').click(function(){
		for (i=1; i<=4; i++){
			$('#flight' + i).show();
		}
		for (i=5; i<=5; i++){
			$('#flight' + i).hide();
		}

		updateAllScrolls();
	});
	$('#inlineCheckbox4').click(function(){
		for (i=1; i<=5; i++){
			$('#flight' + i).show();
		}

		updateAllScrolls();
	});
});
</script>