<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>


<div class="container-fluid full_height padding_content">
	<div class="row full_height">
		<div class="col-md-3 nopadding" id="column1">
			<h1 class="pull-right" breadcrumb="">Book Directly</h1>
			<div class="clearfix"></div>

			<div class="column_content nopadding full_height container-fluid">
				<div class="row">
					<div class="col-md-12 nopadding">
						<a id="but1" class="slide button_big pull-right"
							column-close="column2" column-open="column2"
							href="include/pages/book_directly/flights.php"> <span
							class="sidebar">Flights</span> <img
							class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 nopadding">
						<a id="but2" class="slide button_big pull-right"
							column-close="column2" column-open="column2"
							href="include/pages/book_directly/hotels.php"> <span
							class="sidebar">Hotels</span> <img
							class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 nopadding">
						<a id="but3" class="slide button_big pull-right"
							column-close="column2" column-open="column2"
							href="include/pages/book_directly/flights_hotels.php"> <span
							class="sidebar">Flights & Hotels</span> <img
							class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 nopadding">
						<a id="but4" class="slide button_big pull-right"
							column-close="column2" column-open="column2"
							href="include/pages/book_directly/trip_add_ons.php"> <span
							class="sidebar">Trip add-ons</span> <img
							class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
						</a>
					</div>
				</div>
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