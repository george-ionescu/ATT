<div class="form-group has-feedback">
	<label class="control-label input_label col-sm-3 col-xs-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;city:</label>
	<div class="col-sm-9 col-xs-9 no_padding_left_right">
		<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city name"> 
	</div>
</div>
<div class="clearfix"></div>

<div class="row_form margin_top_block">
	<div class="col-md-6 col-xs-6 short_padding pull-left">
		<div class="custom_input_slide" targetdiv="from">
			<p class="box_title">depart</p>
			<div class="custom_input_slide_content">
				<div class="pull-left">
					<span class="day number_big pull-left"><?php echo date("d"); ?></span>
					<div class="number_small pull-left">
						<input type="hidden" class="calendar_value" name="" />
						<p class="month"><?php echo date("M"); ?></p>
						<p class="year"><?php echo date("Y"); ?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<a href="#" class="open_calendar arrow_right pull-left"><i class="fa fa-caret-down"></i></a>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xs-6 short_padding pull-left">
		<div class="custom_input_slide" targetdiv="to">
			<p class="box_title">return</p>
			<div class="custom_input_slide_content">
				<div class="pull-left">
					<span class="day number_big pull-left"><?php echo date('d', strtotime('+1 day')); ?></span>
					<div class="number_small pull-left">
						<input type="hidden" class="calendar_value" name="" />
						<p class="month"><?php echo date("M", strtotime('+1 day')); ?></p>
						<p class="year"><?php echo date("Y", strtotime('+1 day')); ?></p>
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

<div class="row_form_calendar">
	<div class="col-md-12 nopadding">
		<div id="datepicker_from" class="datepicker"></div>
		<div id="datepicker_to" class="datepicker"></div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="clearfix"></div>

<div class="row_form row_form_adult hotel_form margin_top_block">
	<div class="col-md-6 col-xs-6 short_padding pull-left">
		<div class="custom_input_slide">
			<p class="box_title">adults</p>
			<div class="custom_input_slide_content center">
				<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
				<div class="pull-left">
					<span class="custom-dropdown big">
					    <select id="counterAdult">
					        <option value="1">01</option>
					        <option value="2">02</option>
					        <option value="3">03</option>
					        <option value="4">04</option>
					        <option value="5">05</option>
					        <option value="6">06</option>
					        <option value="7">07</option>
					        <option value="8">08</option>
					        <option value="9">09</option>
					    </select>
					</span>
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
			<div class="clearfix"></div>
			
			<div class="custom_input_slide_content children center">
				<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
				<div class="pull-left">
					<span class="custom-dropdown big">
					    <select id="counterChildren">
					    	<option value="0">00</option>
					        <option value="1">01</option>
					        <option value="2">02</option>
					        <option value="3">03</option>
					        <option value="4">04</option>
					        <option value="5">05</option>
					        <option value="6">06</option>
					        <option value="7">07</option>
					        <option value="8">08</option>
					        <option value="9">09</option>
					    </select>
					</span>
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