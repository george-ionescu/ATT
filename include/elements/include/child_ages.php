<?php $countArray = array('1st', '2nd', '3td', '4th', '5th', '6th', '7th', '8th'); ?>
<?php for ($i=1; $i<=8; $i++) { ?>
	<div class="age<?php echo $i; ?> row_form" <?php if ($i>1) echo "style='display:none;'"; ?>>
		<div class="col-md-6 col-xs-6 nopadding pull-left">
			<label class="radio-inline long_white"><?php echo $countArray[$i-1]; ?> child age</label>
		</div>
		<div class="col-md-6 col-xs-6 nopadding pull-left">
			<span class="custom-dropdown">
			    <select>
			       	<option value="">age</option>
			        <option value="infant">infant</option>
			        <option value="child">child</option>  
			    </select>
			</span>
		</div>
	</div>
	<div class="clearfix"></div>
<?php } ?>