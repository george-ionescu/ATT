<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 flight nopadding" id="column1">
				<h1 class="pull-right">Filter Weekend</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
			        <ul class="menu_column">
						<li class="active"><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-minus-circle"></i>view</a></li>		
						<li><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-plus-circle"></i>view</a></li>	
						<li><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-plus-circle"></i>view</a></li>	
						<li><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-plus-circle"></i>view</a></li>		        
					</ul>
				
					<h1 class="pull-right" style="margin-top: 10px;">Sort Flights</h1>
			        <div class="clearfix"></div>
					<div class="padding_column_content">
						<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
				        	<?php include 'ajax/elements/sort_flight.php'; ?>
				        	
				        	<button id="submit_button" type="submit" class="proceed_button btn btn-default">apply filters</button>
				        	<br /><br />
				        	<a href="#">clear all</a> selections
				        </form>
			        </div>
				</div>
		    </div>
		    
		    <div class="col-md-9 flight flight_detail nopadding" id="column2">
		    	<h1 class="pull-right">300 results from Bucharest to Antigua</h1>
		    	<div class="clearfix"></div>
		    	
		    	<div class="column_content padding_column_content full_height">
			    	<form class="form-horizontal custom_form" role="form" method="post" action="page1_1_2.php">
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