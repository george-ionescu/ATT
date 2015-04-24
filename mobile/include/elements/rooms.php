<?php $countArrayRoom = array('1st', '2nd', '3rd', '4th', '5th'); ?>
<?php for ($j=1; $j<=5; $j++) { ?>

<div id="room<?php echo $j; ?>" <?php if ($j>1) echo "style='display:none;'"; ?>>
	<p class="flight_title" <?php if ($j==1) { ?> style="display:none;" <?php } ?> ><?php echo $countArrayRoom[$j-1]; ?> room</p>
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
	
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/include/child_ages.php'; ?>
	<div class="clearfix"></div>
</div>
<?php } ?>