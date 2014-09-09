<div class="form-group has-success has-feedback">
		<label class="control-label input_label col-sm-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;city:</label>
		<div class="col-sm-9 no_padding_left_right">
			<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city name"> 
			<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
		</div>
	</div>

<div class="row_form">
	<div class="col-md-6 short_padding pull-left">
		<div class="custom_input_slide">
			<p class="box_title">check in</p>
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
	<div class="col-md-6 short_padding pull-left">
		<div class="custom_input_slide">
			<p class="box_title">check out</p>
			<div class="custom_input_slide_content">
				<div id="datepicker_to" class="datepicker"></div>
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
</div>
<div class="clearfix"></div>



<div class="row_form">
	<div class="custom_input_slide small">
		<p class="box_title pull-left">rooms</p>
		
		<div class="custom_input_slide_content rooms small pull-right room">
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
<div class="clearfix"></div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/rooms.php'; ?>

<div class="clearfix"></div>