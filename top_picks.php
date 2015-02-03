<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
		    
		    <div class="col-md-3 nopadding trip" id="column1">
		    	<h1 class="pull-right">View Trips</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
			    	<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but1" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-9 noborder" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Paris</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-9 noborder" href="include/pages/top_picks/trip_with_flight.php">
								<span class="sidebar">Londra</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but3" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-9 noborder" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Madrid</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but4" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" column-class="col-md-9 noborder" href="include/pages/top_picks/trip.php">
								<span class="sidebar">Praga</span>
								<span class="subtitle small">starting from <span class="big">354</span> euro</span>
								<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
							</a>
						</div>
					</div>
				</div>
		    </div>
		    
		    <div class="col-md-3 noborder nopadding" id="column2"></div>
		    
		    <div class="col-md-3 noborder nopadding" id="column3"></div>
		    
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