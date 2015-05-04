<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> 300 results from Bucharest to Antigua</h1>
</div>
<div class="clearfix"></div>
    	
    	<div class="column_content padding_column_content full_height">        
	    	<form class="form-horizontal custom_form" role="form" method="post" action="/">
		    	<?php include 'include/flight_result_table.php'; ?>
			    <div class="clearfix"></div>
	    	</form>
	    	<div class="clearfix"></div>
	    </div>
        <div class="clearfix"></div>
        
        
<script>
	function closePage(){
		url = 'include/pages/book_directly/flights.php';
		$.get(url, function( data ) {
			hidePreloader();
			$('#column1').show();
			$('#column1').html(data);
			
			closeSlideById('column2');

			$('#info_button').hide();
			$('#sort_button').hide();
			$('#sort_wrapper').html("");
		});
	}

	$('.row_content_click').click(function(){
		if (!$(this).hasClass('expand')){
			$(this).addClass('expand');
		} else {
			$(this).removeClass('expand');
		}

		$(this).find('.normal').toggle();
		$(this).find('.expand').toggle();
	});
	
	$('.book').click(function(event){
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