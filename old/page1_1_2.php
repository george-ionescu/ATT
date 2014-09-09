<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-6 nopadding" id="column1">
				<h1 class="pull-right">Your selcted flight from Bucharest to Antigua</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
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
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>