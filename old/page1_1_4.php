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
		    
		    <div class="col-md-6 flight_detail flight nopadding" id="column2">
		    	<h1 class="pull-right">Your Billing Information</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <?php include 'ajax/elements/billing_info.php'; ?>
			        
			        <div class="clearfix"></div>
			        <br />
	    			<div style="text-align: center">
	    				<button type="button" class="btn btn-default" onclick="window.location='page1_1_5.php'">book this trip</button>
	    			</div>
		        </div>
		    </div>
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>

<script>
	$(function(){
		$('#invType1').click(function(){
			$('#personal_invoice').show();
			$('#company_invoice').hide();
		});
		$('#invType2').click(function(){
			$('#personal_invoice').hide();
			$('#company_invoice').show();
		});
	});
</script>