<h1 class="pull-right">Your selected flight from Bucharest to Antigua</h1>

		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <div class="flight_detail_wrapper">
			        	<?php include 'include/flight_recap_table.php'; ?>
			        	<div class="clearfix"></div>
	    				<br /><br />
			        </div>
		        </div>






    			
<script>
				var breadcrump = [
    				{
    					title: 'Trip info',
    					oldSlide: 'column1',
    					newSlide: 'column1',
    					class_bootstrap: 'col-md-3',
    					url: 'include/pages/book_directly/flights.php'
    				},
    				{
    					title: 'Change Flight',
    					oldSlide: 'column1',
    					newSlide: 'column1',
    					class_bootstrap: 'col-md-3',
    					url: 'include/elements/sort_flight.php'
    				}
    			];
    			createBreadcrump(breadcrump);
    			


	$(function(){
		activateMoreLess();
	});
	
	function showOption(nr){
		for (i=1; i<=3; i++){
			$('#option' + i).hide();
			$('#but' + i).removeClass('active');
		}
		$('#option' + nr).show();
		$('#but' + nr).addClass('active');
	}

	$('#book_button').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'include/elements/trip_info.php?page=signin';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	});
	
</script>