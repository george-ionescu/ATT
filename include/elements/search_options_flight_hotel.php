<br />
<a href="javascript:toggleSearchOptions();" class="search_options pull-right"><i class="fa fa-plus-circle"></i>more options</a>
<div class="clearfix"></div>

<div id="search_options" style="display:none;">
	<p style="color:#fff;font-size:18px;text-align:left;margin-bottom:4px;">Flight Filters</p>
	<div class="row_form">
		<span class="custom-dropdown">
		    <select>
		        <option>ticket class</option>
		        <option>Option 2</option>  
		        <option>Option 3</option>
		        <option>Option 4</option>
		        <option>Option 5</option>
		    </select>
		</span>
	</div>
	<div class="row_form">
		<label class="radio-inline long_white"> direct flight only <input type="checkbox" value="1"><span class="check"></span> </label> 
	</div>
	<div class="row_form">
		<span class="custom-dropdown">
		    <select>
		        <option>airline</option>
		        <option>Option 2</option>  
		        <option>Option 3</option>
		        <option>Option 4</option>
		        <option>Option 5</option>
		    </select>
		</span>
	</div>
	<div class="clearfix"></div>
	
	<p style="color:#fff;font-size:18px;text-align:left;margin-top:7px;margin-bottom:4px;">Hotel Filters</p>
	<div class="row_form">
		<input type="text" class="form-control italic" placeholder="search by hotel name"> 
	</div>
	<div class="row_form">
		<div class="col-md-12 col-xs-12 short_padding">
			<label class="control-label input_label col-sm-6 col-xs-6" for="inputSuccess3">&nbsp;&nbsp;&nbsp;hotel stars</label>
			<div class="col-sm-6 col-xs-6 no_padding_left_right">
				<?php include 'include/stars.php'; ?>
			</div>
		</div>
	</div>
</div>