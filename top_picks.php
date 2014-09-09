<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-4 hotel nopadding" id="column1">
				<h1 class="pull-right">Filter Trips</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
			        	<div class="row_form">
				        	<div class="col-md-6 short_padding pull-left">
								<div class="options_list">
									<span class="title">Experience</span>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Honeymoon</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> Beach</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> Winter Sports</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Wind Sports</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Casino Games</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> SPA & Health</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Climbing, Trekking, Mountain Biking</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Peace & Quiet Retreats</label>
								</div> 	
							</div>
							<div class="col-md-6 short_padding pull-left">	
								<div class="options_list">
									<span class="title">&nbsp;</span>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Fishing</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Scuba & Snorkeling</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Theme Parks</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Big Iconic Cities</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Wildlife & Zoo</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Golf</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> Sightseeing & Local Culture</label>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Party & Nightlife</label>
								</div> 
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						
						<br />
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
									<span class="title">Destination</span>
								</div>
								<div class="form-group has-success has-feedback">
									<label class="control-label input_label col-sm-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;city:</label>
									<div class="col-sm-9 no_padding_left_right">
										<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city name"> 
									</div>
								</div>
							</div>
						</div>
						
						
						
						<div class="row_form">
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
			        
			        	<br /><br />
			        	<button id="submit_button" type="submit" class="btn btn-default">apply filters</button>
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
							<a id="but1" class="slide button_big pull-right" column-close="column3" column-open="column3" column-class="col-md-5" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Paris</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide button_big pull-right" column-close="column3" column-open="column3" column-class="col-md-5" href="include/pages/top_picks/trip_with_flight.php">
								<span class="sidebar">Londra</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but3" class="slide button_big pull-right" column-close="column3" column-open="column3" column-class="col-md-5" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Madrid</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but4" class="slide button_big pull-right" column-close="column3" column-open="column3" column-class="col-md-5" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Praga</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
				</div>
		    </div>
		    
		    <div class="col-md-5 noborder nopadding" id="column3"></div>
		    
		    <div class="col-md-3 noborder nopadding" id="column4"></div>
		    
		</div>
	</div>
</content>

<?php include 'include/slideshow.php'; ?>

<?php include 'include/footer.php'; ?>