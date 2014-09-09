<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">Weekend Escape</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but1" class="slide button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/flights_week.php">
								<span class="sidebar">Flights</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/hotels_week.php">
								<span class="sidebar">Hotels</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but3" class="slide button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/flights_hotels_week.php">
								<span class="sidebar">Flights & Hotels</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
		    </div>
		    
		    <div class="col-md-3 nopadding" id="column2"></div>
		    
		    <div class="col-md-3 nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>