<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 flight nopadding" id="column1">
				<h1 class="pull-right">Sort Flights</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
			        	<?php include 'ajax/elements/sort_flight.php'; ?>
			        	
			        	<button id="submit_button" type="submit" class="proceed_button btn btn-default">apply filters</button>
			        	<br /><br />
			        	<a href="#">clear all</a> selections
			        </form>
		        </div>
		    </div>
		    
		   
		   <div class="col-md-9 flight flight_detail black_background_transparency nopadding" id="column2">
		    	<h1 class="pull-right">300 results from Bucharest to Antigua</h1>
		    	<div class="clearfix"></div>
		    	
		    	<div class="column_content padding_column_content full_height">
		    		<a class="flight_detail_tab pull-left" href="page1_3_2.php"><span class="title">The Flight</span><br />This is your selected flight</a>
			        <a class="flight_detail_tab pull-left active" href="page1_3_2b.php"><span class="title">Other Flights</span><br />Here you can choose another flight</a>
			        <div class="clearfix"></div>
		        
			    	<form class="form-horizontal custom_form maro_background" role="form" method="post" action="page1_3_2.php">
				    	<br />
				    	<?php include 'ajax/elements/flight_table.php'; ?>
					    <div class="clearfix"></div>
			    	</form>
			    </div>
		        <div class="clearfix"></div>
		    </div>
		</div>
	</div>
</content>

<?php include '../include/footer.php'; ?>

<script>
function showDetail(){
	$('tr.normal').hide();
	$('tr.expand').show();
}
function hideDetail(){
	$('tr.normal').show();
	$('tr.expand').hide();
	
}
</script>