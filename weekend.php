<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">Weekend Escape</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but1" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/weekend/flights_week.php">
								<span class="sidebar">Flights</span>
								<img class="img-responsive col-xs-12" src="images/avion.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/weekend/hotels_week.php">
								<span class="sidebar">Hotels</span>
								<img class="img-responsive col-xs-12" src="images/hotel.jpg" alt="" />
							</a>
						</div>
					</div>
					<?php if (1==2) { ?>
						<div class="row">
							<div class="col-md-12 nopadding">
								<a id="but3" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/weekend/flights_hotels_week.php">
									<span class="sidebar">Flights & Hotels</span>
									<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
		    </div>
		    
		    <div class="col-md-3 nopadding" id="column2"></div>
		    
		    <div class="col-md-3 nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		    
		    <div class="col-md-6 nopadding" id="column3x">
		    	<div id="compare_content">
		    		<div class="box pull-left">
			    		<p class="title">05 Dec - 08 Dec</p>
			    		<p class="price_p">
							<span class="price">254</span> EUR<br />total price
						</p>
						<a class="btn btn-default" href="#">select</a>
					</div>
					<div class="box pull-left">
			    		<p class="title">05 Dec - 08 Dec</p>
			    		<p class="price_p">
							<span class="price">254</span> EUR<br />total price
						</p>
						<a class="btn btn-default" href="#">select</a>
					</div>
					<div class="box pull-left">
			    		<p class="title">05 Dec - 08 Dec</p>
			    		<p class="price_p">
							<span class="price">254</span> EUR<br />total price
						</p>
						<a class="btn btn-default small" href="#">select</a>
						<a href="javascript:closeCompare();" class="pull-right"><i class="ionicons ion-ios-close-outline"></i> close</a> 
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