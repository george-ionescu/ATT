<h1 class="pull-right">300 results from Bucharest to Antigua</h1>
    	<div class="clearfix"></div>
    	
    	<div class="column_content padding_column_content full_height">        
	    	<form class="form-horizontal custom_form maro_background" role="form" method="post" action="/">
		    	<?php include 'include/flight_result_table.php'; ?>
			    <div class="clearfix"></div>
	    	</form>
	    	<div class="clearfix"></div>
	    </div>
        <div class="clearfix"></div>
        
        
<script>
	function showDetail22(id){
		$('tr.normal.' + id).toggle();
		$('tr.expand.' + id).toggle();

		updateAllScrolls();
	}

	$('.book').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'include/elements/flight_recap.php';
		var class_bootstrap = 'col-md-6';
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	});
</script>