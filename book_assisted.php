<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-4 full_height assisted nopadding" id="column1">
		        
		        <div class="column_content padding_content full_height container-fluid" style="padding-top:40px;">
			        <form class="form-horizontal custom_form" role="form" method="post" action="page2_1.php">
				        <br />
				        
				        
				        <div class="row_form">
							<div class="col-lg-6 col-md-7 col-xs-12 nopadding">
								<p style="line-height:50px;">Please choose a month</p>
							</div>
							<div class="col-lg-6 col-md-5 col-xs-12 nopadding">
								<div class="custom_input_slide_content" style="margin-top: 0;">
									<span class="custom-dropdown assisted_select">
									    <select>
									    	<?php for ($m=1; $m<=12; $m++) { ?>
									        	<option value="<?php echo $m; ?>"><?php echo strtoupper(date('F', mktime(0,0,0,$m))); ?></option>
									        <?php } ?>
									    </select>
									</span>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
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
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> <span>Party & Nightlife</span></label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> <span>Sightseeing & Local Culture</span></label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> <span>Peace & Quiet Retreats</span></label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> <span>Climbing, Trekking, Mountain Biking</span></label>
									
								</div> 
							</div>
							<div class="clearfix"></div>
						</div>		
			        	<div class="clearfix"></div>
			        	
			        	<p>You can also use the map to choose places and find activities.</p>
			        	
			        	<div style="text-align: center;">
			        		<br />
			        		<button id="demo" type="submit" class="btn btn-default">proceed</button>
			        		<br /><br />
			        		<a href="#">clear all</a> selections
			        	</div>
			        </form>
			     </div>
		    </div>
		    
		   
		    
		    <div class="col-md-3 nopadding" id="column2"></div>
		    
		    <div class="col-md-3 nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		    
		    <div class="col-md-6 nopadding" id="column3x">
		    	<div id="compare_content">
		    		<div class="box pull-left">
			    		<p>05 dec - 08 dec</p>
			    		<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="box pull-left">
			    		<p>05 dec - 08 dec</p>
			    		<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="box pull-left">
			    		<p>05 dec - 08 dec</p>
			    		<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="clearfix"></div>
		    	</div>
		    	<div id="flight_content">
		    		<h1 class="pull-right">Preselected flight Bucharest to Antigua</h1>
		    		<div class="clearfix"></div>
		    		<p class="pull-right">You can change your flight later</p>
		        	<div class="clearfix"></div>
		        	
		    		<?php include 'include/elements/flight_recap_short.php'; ?>
		    		
		    		<div class="pull-right">
						<a href="javascript:closeSlideById('column3x');"><i class="fa fa-times-circle-o"></i>close</a>
					</div>
					<div class="clearfix"></div>
		    	</div>
		    </div>
		    
		    <div class="col-md-6 nopadding full_height" id="column3gmap">
		    	<div id="google-map" class="map"></div>
		    </div>
		</div>
	</div>
</content>

<?php include 'include/slideshow.php'; ?>

<?php include 'include/footer.php'; ?>


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

	openSlide($('#column3gmap'), null, 'col-md-8');

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

	$('#demo').click(function(event){
		event.preventDefault();

		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'include/pages/book_assisted/menu.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			$('#column3gmap').hide();
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	});
</script>