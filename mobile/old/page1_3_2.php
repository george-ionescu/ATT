<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">Your Trip</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
		        	<?php include 'ajax/elements/trip_recap.php'; ?>
		        </div>
		    </div>
			
			<div class="col-md-9 flight flight_detail black_background_transparency nopadding" id="column2">
				<h1 class="pull-right">Your selcted flight from Bucharest to Antigua</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <a class="flight_detail_tab pull-left active" href="page1_3_2.php"><span class="title">The Flight</span><br />This is your selected flight</a>
			        <a class="flight_detail_tab pull-left" href="page1_3_2b.php"><span class="title">Other Flights</span><br />Here you can choose another flight</a>
			        <div class="clearfix"></div>
			        
			        <div class="flight_detail_wrapper">
				        <?php include 'ajax/elements/flight_recap.php'; ?>
				        
	    				<div class="clearfix"></div>
	    				<br />
	    				<div style="text-align: center">
	    					<button type="button" class="btn btn-default" onclick="window.location='page1_1_3.php';">book</button>
	    				</div>
	    				<br /><br />
	    			</div>
		        </div>
		    </div>
		    
		    <div class="col-md-6 flight_detail" id="column2">
		    </div>
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>