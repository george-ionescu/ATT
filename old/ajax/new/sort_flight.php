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
			
			<br /><br /><br />

<div id="slider22"></div>

<br />
			
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
		        
		        
		        
        <script>
        	$(function(){
        		//slider
        		$("#slider22").rangeSlider({
        	    	arrows:false,
        	    	formatter:function(val){
        	    		return  parseInt(val) + " €";
        	    	}
        	    });
            });
	        function openNext(){
	    		var oldSlide = $('#column2');
	    		var newSlide = $('#column2');
	    		var url = 'ajax/new/flight_result.php';
	    		var class_bootstrap = 'col-md-9 flight flight_detail nopadding';
	    		
	    		if (oldSlide && newSlide && url != '#'){
	    			changeSlide(oldSlide, newSlide, url, class_bootstrap);
	    		}
	    	}
	
	    	setTimeout(openNext, 400);
        </script>