<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">My Account</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but1" class="slide button_big account_sidebar pull-right" column-close="column2" column-open="column2" column-class="col-md-3 account" href="include/pages/my_account/overview.php">
								<span class="sidebar">Account overview</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide button_big account_sidebar pull-right" column-close="column2" column-open="column2" column-class="col-md-9 account" href="include/pages/my_account/account.php">
								<span class="sidebar">Account settings</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but3" class="slide button_big account_sidebar pull-right" column-close="column2" column-open="column2" column-class="col-md-3 account" href="include/pages/my_account/travel_preferences.php">
								<span class="sidebar">Travel preferences</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but4" class="slide button_big account_sidebar pull-right" column-close="column2" column-open="column2" column-class="col-md-3 account" href="include/pages/my_account/history.php">
								<span class="sidebar">Booking history</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but5" class="slide button_big account_sidebar pull-right" column-close="column2" column-open="column2" column-class="col-md-3 account" href="include/pages/my_account/recent_searches.php">
								<span class="sidebar">Recent searches</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
		    </div>
		    
		    <div class="col-md-3 nopadding account" id="column2"></div>
		    
		    <div class="col-md-3 noborder nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding " id="column4"></div>
		    
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
		        	
		    		<?php include 'ajax/elements/flight_recap_short.php'; ?>
		    		
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