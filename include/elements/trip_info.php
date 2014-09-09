<div id="sort_type_1">
	<h1 class="pull-right">Your Trip</h1>
	<div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
		        	<p style="text-align: left;">
		        <strong>Dates and Travellers</strong><br />
				May 15, 2014 - May 21, 2014<br />
				2 adults, 1 child<br />
				<br />
				<strong>Depart</strong><br />
				British Airways – Flight 885<br />
				Take-off at 08:50 , OTP Bucharest<br />
				Landing at 10:15 , LHR London<br />
				Economy | Airbus A320-100/200 | 3h 25m<br />
				<br />
				Stop in LHR London 1h 15m<br />
				British Airways – Flight 285<br />
				Take-off at 11:30 , LHR London<br />
				Landing at 14:35 , SFO San Francisco<br />
				Economy | Boeing 747-400 | 11h 05m<br />
				<br />
				<strong>Return</strong><br />
				Attention. This flight leaves on May 21 and arrives on May 22.<br />
				<br />
				British Airways – Flight 286<br />
				Take-off at 19:20 , SFO San Francisco<br />
				Landin at 01:30 , LHR London<br />
				Economy | Boeing 747-400 | 10h 10m<br />
				<br />
				Stop in LHR London 4h 50m<br />
				<br />
				British Airways – Flight 884<br />
				Take-off at 18:20 , LHR London<br />
				Landing at 23:30 , OTP Bucharest<br />
				Economy | Airbus A320-100/200 | 11h 05m<br />
				<br />
				</p>
				<p style="text-align: center;"><strong>Total price: 2332 euro</strong></p>
				</div>
</div>	        
<div id="sort_type_2">
	<h1 class="pull-right">Sort Flights</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
			        	<div class="row_form">
        		<div class="col-md-6 short_padding pull-left">
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
				<div class="col-md-6 short_padding pull-left">
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
			</div>
			
			<br />
			<div class="row_form">
				<div class="col-md-6 short_padding pull-left">
					<div class="options_list">
						<span class="title">Stops</span>
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
					</div> 	
				</div>
				<div class="col-md-6 short_padding pull-left">	
					<div class="options_list">
						<span class="title">Ticket class</span>
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Economy</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label> 
					</div> 
				</div>
				<div class="clearfix"></div>
			</div>		
			<div class="clearfix"></div>
			
			<?php include 'include/slider.php'; ?>
			
			<div class="row_form">
				<div class="col-md-6 short_padding pull-left">
					<div class="options_list">
						<span class="title">Airports</span>
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr3" value="option1" checked><span class="check"></span> Paris</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr3" value="option2"><span class="check"></span> Londra</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr3" value="option3"><span class="check"></span> Praga</label> 
					</div> 	
				</div>
				<div class="col-md-6 short_padding pull-left">	
					<div class="options_list">
						<span class="title">Airlines</span>
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr3" value="option1" checked><span class="check"></span> Air Canada</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr3" value="option2"><span class="check"></span> Air America</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr3" value="option3"><span class="check"></span> Tarom</label> 
					</div> 
				</div>
				<div class="clearfix"></div>
			</div>		
			<div class="clearfix"></div>
			        	
			        	<button id="submit_button" type="submit" class="proceed_button btn btn-default">apply filters</button>
			        	<br /><br />
			        	<a href="#">clear all</a> selections
			        </form>
		        </div>
</div>
		        
		        <script>
	        function openNext(){
	    		var oldSlide = $('#column2');
	    		var newSlide = $('#column2');
	    		var url = 'include/elements/<?php echo $_GET['page']; ?>.php';

	    		var class_bootstrap = 'col-md-3 nopadding';
	    		if (url == 'include/elements/signin.php'){
	    			class_bootstrap = 'col-md-6 flight flight_detail nopadding';
	    		}
	    		if (url == 'include/elements/flight_tabs.php'){
	    			class_bootstrap = 'col-md-9 flight flight_detail black_background_transparency nopadding';
	    		}
	    		
	    		if (oldSlide && newSlide && url != '#'){
	    			changeSlide(oldSlide, newSlide, url, class_bootstrap);
	    		}
	    	}
	
	    	setTimeout(openNext, 400);
        </script>