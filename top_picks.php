<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 hotel nopadding" id="column1">
				<h1 class="pull-right">Filter Trips</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
						<div class="row_form">
				        	<div class="col-md-6 short_padding pull-left">
								<div class="options_list">
									<span class="title">Period</span>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> January</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> February</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> March</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span>  April</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> May</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> June</label>
								</div> 	
							</div>
							<div class="col-md-6 short_padding pull-left">	
								<div class="options_list">
									<span class="title">&nbsp;</span>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> July</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> August</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> September</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> October</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> November</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> December</label>
								</div> 
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						
						<br />
						<div class="row_form">
							<div class="col-md-12 short_padding">
								<div class="options_list">
									<span class="title">Theme</span>
								</div>
								<div class="form-group">
									<div class="row_form">
										<div class="col-md-12 short_padding">
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
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
						<h1 class="pull-right" style="margin-right: 0;">Trip Information</h1>
        				<div class="clearfix"></div>
        
						<div id="add_on_trip">
							<div class="form-group">
								
								
								<div class="row_form">
									<div class="custom_input_slide small">
										<p class="box_title pull-left">rooms</p>
										
										<div class="custom_input_slide_content rooms small pull-right room">
											<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
											<div class="pull-left">
												<span class="counterValue number_big pull-left">01</span>
												<div class="clearfix"></div>
											</div>
											<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
									
								<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/rooms_flight.php'; ?>
							</div>
						</div>
				
			        	<br /><br />
			        	<button id="submit_button" type="submit" class="btn btn-default">proceed</button>
			        	<br /><br />
			        	<a href="#">clear all</a> selections
			        </form>
		        </div>
		    </div>
		    
		    <div class="col-md-3 nopadding trip" id="column2">
		    	<h1 class="pull-right">View Trips</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
			    	<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but1" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-6" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Paris</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-6" href="include/pages/top_picks/trip_with_flight.php">
								<span class="sidebar">Londra</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but3" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-6" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Madrid</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but4" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-6" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Praga</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
				</div>
		    </div>
		    
		    <div class="col-md-6 noborder nopadding" id="column3"></div>
		    
		    <div class="col-md-3 noborder nopadding" id="column4"></div>
		    
		    <div class="col-md-6 nopadding" id="column3x">
				<div id="compare_content">
					<div class="box pull-left">
						<p>05 dec - 08 dec</p>
						<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight
							included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="box pull-left">
						<p>05 dec - 08 dec</p>
						<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight
							included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="box pull-left">
						<p>05 dec - 08 dec</p>
						<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight
							included
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
						<a href="javascript:closeSlideById('column3x');"><i
							class="fa fa-times-circle-o"></i>close</a>
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