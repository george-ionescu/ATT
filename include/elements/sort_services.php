<h1 class="pull-right">Sort Services</h1>
<div class="clearfix"></div>
	<div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">	        
		<div class="row_form">
				<div class="col-md-12 short_padding">
					<input type="text" class="form-control italic" placeholder="search by name"> 
				</div>
			</div>
			
			<?php include 'include/slider.php'; ?>
			
        	<div class="options_list">
				<span class="title">Activity Type</span>
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr3" value="option1" checked><span class="check"></span> Air Canada</label> 
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr3" value="option2"><span class="check"></span> Air America</label> 
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr3" value="option3"><span class="check"></span> Tarom</label> 
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr3" value="option1"><span class="check"></span> Air Canada</label> 
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr3" value="option2"><span class="check"></span> Air America</label> 
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr3" value="option3"><span class="check"></span> Tarom</label> 
				<div class="clearfix"></div>
				<br />
				<span class="title">Operating Dates</span>
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr3" value="option1" checked><span class="check"></span> Air Canada</label> 
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr3" value="option2"><span class="check"></span> Air America</label> 
				<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr3" value="option3"><span class="check"></span> Tarom</label> 
			</div>
			<div class="clearfix"></div>
		 </form>
		</div>       
		        
		        
        <script>
            
	        function openNext(){
	    		var oldSlide = $('#column2');
	    		var newSlide = $('#column2');
	    		var url = 'include/elements/service_result.php';
	    		var class_bootstrap = 'col-md-3 hotel nopadding';
	    		
	    		if (oldSlide && newSlide && url != '#'){
	    			changeSlide(oldSlide, newSlide, url, class_bootstrap);
	    		}
	    	}
	
	    	setTimeout(openNext, 400);
        </script>