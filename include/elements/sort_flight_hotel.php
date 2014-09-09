<h1 class="pull-right">Sort Hotels</h1>
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
				<div class="col-md-6 short_padding pull-left" style="padding-right: 0;">
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
			<div class="row_form">
				<div class="col-md-12 short_padding">
					<input type="text" class="form-control italic" placeholder="search by hotel name"> 
				</div>
			</div>
			<div class="row_form">
				<div class="col-md-12 short_padding">
					<label class="control-label input_label col-sm-6" for="inputSuccess3">&nbsp;&nbsp;&nbsp;hotel stars</label>
					<div class="col-sm-6 no_padding_left_right">
						<div id="stars">
							<a href="#" class="selected">3 <img src="images/star_line.png" alt="" /></a>
							<a href="#" class="selected">4 <img src="images/star.png" alt="" /></a>
							<a href="#">5 <img src="images/star.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			
			<?php include 'include/slider.php'; ?>
			
			<a href="javascript:toggleSearchOptions();" class="search_options pull-right"><i class="fa fa-plus-circle"></i>advanced filters</a>
			<div class="clearfix"></div>
			
			<div id="search_options" style="display:none;">
	        	<div class="row_form">
		        	<div class="col-md-12 short_padding pull-left">
		        		<div class="options_list">
							<span class="title">Hotel Facilities</span>
						</div>
		        	</div>
		        	<div class="col-md-6 short_padding pull-left">
						<div class="options_list">
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
						</div> 	
					</div>
					<div class="col-md-6 short_padding pull-left">	
						<div class="options_list">
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Economy</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label> 
						</div> 
					</div>
				</div>
				<div class="clearfix"></div>
	        	
	        	<br />
	        	<div class="row_form">
	        		<div class="col-md-12 short_padding pull-left">
			        	<div class="options_list pull-left">
							<span class="title">Points of Interest</span>
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr3" value="option1" checked><span class="check"></span> Air Canada</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr3" value="option2"><span class="check"></span> Air America</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr3" value="option3"><span class="check"></span> Tarom</label> 
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		 </form>
		</div>       
		        
		        
        <script>
            
	        function openNext(){
	    		var oldSlide = $('#column2');
	    		var newSlide = $('#column2');
	    		var url = 'include/elements/hotel_result.php?type=2';
	    		var class_bootstrap = 'col-md-3 hotel nopadding';
	    		
	    		if (oldSlide && newSlide && url != '#'){
	    			changeSlide(oldSlide, newSlide, url, class_bootstrap);
	    		}
	    	}
	
	    	setTimeout(openNext, 400);
        </script>