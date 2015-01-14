<h1 class="pull-right">Main Services</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height form_tab">
	<form class="form-horizontal custom_form" role="form" method="post" action="">
		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Transport</label> 
		<div class="clearfix"></div>
		<p style="text-align:left;">30 dec 2014 10:00 Bucuresti Otopeni / Antalya Antalya International 30 dec 2014 11:00</p>
		
		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Christmas Dinner</label> 
		<div class="clearfix"></div>
		<p style="text-align:left;">30 dec 2014 10:00 Bucuresti Otopeni / Antalya Antalya International 30 dec 2014 11:00</p>
		
		
		<h1 class="pull-right" style="margin-right:0;">Extra Services</h1>
		<div class="clearfix"></div>
		
		
		
		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Nume serviciu</label> 
		<div class="clearfix"></div>
		
		<div class="row_form">
			<p class="flight_title first">Service dates</p>
			<div class="col-md-6 col-xs-6 short_padding pull-left">
				<div class="custom_input_slide" targetdiv="single">
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
		</div>
		<div class="clearfix"></div>
		
		<div class="row_form_calendar">
			<div class="col-md-12 nopadding">
				<div id="datepicker_single" class="datepicker"></div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row_form">
			<p class="flight_title first">1st room</p>
			<div class="col-md-12 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>2 persons</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		
		<div class="row_form">
			<p class="flight_title">2nd room</p>
			<div class="col-md-6 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>1 person</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
			<div class="col-md-6 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>1 child</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		
		
		
		
		<br /><br />
		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Nume serviciu</label> 
		<div class="clearfix"></div>
		
		<div class="row_form">
			<p class="flight_title first">Service dates</p>
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

		<div class="row_form">
			<p class="flight_title first">1st room</p>
			<div class="col-md-12 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>2 persons</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		
		<div class="row_form">
			<p class="flight_title">2nd room</p>
			<div class="col-md-6 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>1 person</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
			<div class="col-md-6 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>1 child</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		
		
		
		<br /><br />
		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Nume serviciu</label> 
		<div class="clearfix"></div>
		
		<div class="row_form">
			<p class="flight_title first">Service dates</p>
			<div class="col-md-12 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>from 30 dec 2014 to 30 jan 2014</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		
		<div class="row_form">
			<p class="flight_title first">1st room</p>
			<div class="col-md-12 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>2 persons</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		
		<div class="row_form">
			<p class="flight_title">2nd room</p>
			<div class="col-md-6 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>1 person</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
			<div class="col-md-6 short_padding">
				<span class="custom-dropdown">
				    <select>
				        <option>1 child</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		
		
	</form>
	
	<br /><br /><br />
	<div class="clearfix"></div>
	<button id="submit_button" type="submit" class="btn btn-default proceed_button">check availability</button>
	<br /><br />
	<p style="font-weight:bold; text-align:center; font-size:22px; margin-bottom:0;">2600 euro</p>
	<p style="text-align:center;">with extra services included</p>
</div>


<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column1');
			var newSlide = $('#column1');
			var url = 'include/elements/trip_info.php?page=signin&from=extra_service';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>