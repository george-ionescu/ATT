<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 hotel nopadding" id="column1">
				<h1 class="pull-right">Sort Services</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
			        	<?php include 'ajax/elements/sort_services.php'; ?>
			        	
			        	<button id="submit_button" type="submit" class="proceed_button btn btn-default">apply filters</button>
			        </form>
		        </div>
		    </div>
		    
		    <div class="col-md-3 hotel nopadding" id="column2">
		    	<h1 class="pull-right">Choose Service</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
			        <?php include 'ajax/elements/services_list.php'; ?>
			    </div>
		    </div>
		    
		    <div class="col-md-3 nopadding noborder" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		</div>
	</div>
</content>

<?php include '../include/footer.php'; ?>