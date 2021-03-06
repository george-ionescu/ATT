<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="my_account.php"></a> Travel Preferences</h1>
</div>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div class="row_form">
			<div class="col-md-12 col-xs-12 short_padding">
				<div class="options_list">
					<span class="title">Hotel star rating</span>
				</div>
				<label class="control-label input_label col-sm-6 col-xs-6" for="inputSuccess3">&nbsp;&nbsp;&nbsp;hotel stars</label>
				<div class="col-sm-6 col-xs-6 no_padding_left_right">
					<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/include/stars.php'; ?>
				</div>
			</div>
		</div>
		<br /><br />
		<div class="row_form">
        	<div class="col-md-12 col-xs-12 short_padding pull-left">
				<div class="options_list">
					<span class="title">Hotel Facilities</span>
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
				</div> 	
			</div>
		</div>
		<div class="clearfix"></div>
		
		<br />
		<div class="col-md-12 col-xs-12 short_padding" style="padding-left: 0; padding-right: 0;">
			<div class="options_list">
				<span class="title">Hotel brand</span>
			</div>
			<div class="form-group ">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="hotel name"> 
			</div>
			<div class="form-group ">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="hotel name"> 
			</div>
			<div class="form-group ">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="hotel name"> 
			</div>
		</div>
		<div class="clearfix"></div>
		
		<br />
		<div class="row_form">
        	<div class="col-md-12 col-xs-12 short_padding pull-left">
				<div class="options_list">
					<span class="title">Flight Ticket Class</span>
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
				</div> 	
			</div>
		</div>
		<div class="clearfix"></div>
		
		<br />
		<div class="col-md-12 col-xs-12 short_padding" style="padding-left: 0; padding-right: 0;">
			<div class="options_list">
				<span class="title">Airlines</span>
			</div>
			<span class="custom-dropdown" style="margin-bottom: 5px;">
			    <select>
			        <option>Option 1</option>
			        <option>Option 2</option>  
			        <option>Option 3</option>
			        <option>Option 4</option>
			        <option>Option 5</option>
			    </select>
			</span>
			<span class="custom-dropdown" style="margin-bottom: 5px;">
			    <select>
			        <option>Option 1</option>
			        <option>Option 2</option>  
			        <option>Option 3</option>
			        <option>Option 4</option>
			        <option>Option 5</option>
			    </select>
			</span>
			<span class="custom-dropdown">
			    <select>
			        <option>Option 1</option>
			        <option>Option 2</option>  
			        <option>Option 3</option>
			        <option>Option 4</option>
			        <option>Option 5</option>
			    </select>
			</span>
		</div>
		<div class="clearfix"></div>
		
		<br />
		<div class="row_form">
        	<div class="col-md-6 col-xs-6 short_padding pull-left">
				<div class="options_list">
					<span class="title">Experience</span>
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
				</div> 	
			</div>
			<div class="col-md-6 col-xs-6 short_padding pull-left">	
				<div class="options_list">
					<span class="title">&nbsp;</span>
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Economy</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label> 
				</div> 
			</div>
		</div>
		<div class="clearfix"></div>
		
		<br />
		<div class="row_form" style="height:20px;">
			<div class="options_list">
				<span class="title">Travel group</span>
			</div>
		</div>
		
		
		<div class="row_form row_form_adult">
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
		
		<br />
		<div class="row_form">
        	<div class="col-md-6 col-xs-6 short_padding pull-left">
				<div class="options_list">
					<span class="title">Travel Season</span>
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
					<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
				</div> 	
			</div>
		</div>
		<div class="clearfix"></div>
		
		<br />
		<div class="text-center">
			<button id="submit_button" type="submit" class="btn btn-default">save</button>
		</div>
	</form>
</div>