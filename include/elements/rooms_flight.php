<?php $countArrayRoom = array('1st', '2nd', '3rd', '4th', '5th'); ?>
<?php for ($j=1; $j<=5; $j++) { ?>

<div id="room<?php echo $j; ?>" <?php if ($j>1) echo "style='display:none;'"; ?>>
	<?php if ($j>1) { ?>
		<p class="flight_title"><?php echo $countArrayRoom[$j-1]; ?> room</p>
	<?php } ?>
	<div class="row_form hotel_form">
		<div class="col-md-6 col-xs-6 short_padding pull-left">
			<div class="custom_input_slide">
				<p class="box_title">adults</p>
				<div class="custom_input_slide_content center">
					<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
					<div class="pull-left">
						<span id="counterAdult" class="counterValue number_big pull-left" minvalue="1" maxvalue="9">01</span>
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
				<a href="javascript:toggleChildrenDetail('room<?php echo $j; ?>');" class="pull-right detail_button"><i class="fa fa-plus-circle"></i>info</a>
				<div class="clearfix"></div>
				
				<div class="custom_input_slide_content children center">
					<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
					<div class="pull-left">
						<span id="counterChildren" class="counterValue number_big pull-left">01</span>
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
</div>
<?php } ?>