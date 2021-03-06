<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-4 full_height assisted" id="column1">
		        
		        <div class="column_content nopadding full_height container-fluid">
			        <form class="form-horizontal custom_form" role="form" method="post" action="page2_1.php">
				        <br />
				        <p class="pull-left">Please choose a month</p>
				        <div class="custom_input_slide_content pull-left" style="margin-top: 0;">
							<a href="javascript:prevMonth();" class="arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
							<span id="month_name" class="pull-left"></span>
							<a href="javascript:nextMonth();" class="arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						<p>and travel experience</p>
						
						<br />
						<div class="row_form">
							<div class="col-md-4 short_padding pull-left">
								<div class="options_list">
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Honeymoon</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> Beach</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> Winter Sports</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Wind Sports</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Casino Games</label>
																		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Scuba & Snorkeling</label> 
									
								</div> 	
							</div>
							<div class="col-md-4 short_padding pull-left">	
								<div class="options_list">
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Golf</label>
								
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Fishing</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Theme Parks</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Wildlife & Zoo</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> SPA & Health</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Big Iconic Cities</label>
									
								</div> 
							</div>
							<div class="col-md-4 short_padding pull-left">	
								<div class="options_list">
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Party & Nightlife</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Sightseeing & Local Culture</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Peace & Quiet Retreats</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Climbing, Trekking, Mountain Biking</label>
									
								</div> 
							</div>
							<div class="clearfix"></div>
						</div>		
			        	<div class="clearfix"></div>
			        	
			        	<p>You can also use the map to choose places and find activities.</p>
			        	
			        	<div style="text-align: center;">
			        		<br />
			        		<button type="submit" class="btn btn-default">proceed</button>
			        		<br /><br />
			        		<a href="#">clear all</a> selections
			        	</div>
			        </form>
			     </div>
		    </div>
		    
		    <div class="col-md-8 full_height nopadding" id="">
		    	<div id="google-map" class="map"></div>
		    </div>
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>


<script>
	var month = new Array();
	month[0] = "January";
	month[1] = "February";
	month[2] = "March";
	month[3] = "April";
	month[4] = "May";
	month[5] = "June";
	month[6] = "July";
	month[7] = "August";
	month[8] = "September";
	month[9] = "October";
	month[10] = "November";
	month[11] = "December";

	var d = new Date();
	var currentMonthPosition = d.getMonth();
	var currentMonth = month[currentMonthPosition];
	$('#month_name').html(currentMonth);

	function prevMonth(){
		currentMonthPosition--;
		if (currentMonthPosition < 0){
			currentMonthPosition = 11;
		}
		$('#month_name').html(month[currentMonthPosition]);
	}

	function nextMonth(){
		currentMonthPosition++;
		if (currentMonthPosition > 11){
			currentMonthPosition = 0;
		}
		$('#month_name').html(month[currentMonthPosition]);
	}
</script>