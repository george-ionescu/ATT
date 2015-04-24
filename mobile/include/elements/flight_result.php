<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> 300 results from Bucharest to Antigua</h1>
</div>
<div class="clearfix"></div>
    	
    	<div class="column_content padding_column_content full_height">        
	    	<form class="form-horizontal custom_form" role="form" method="post" action="/">
		    	<div class="hide_on_mobile"><?php include 'include/flight_result_table.php'; ?></div>
		    	<div class="hide_on_desktop"><?php include 'include/flight_result_table_mobile.php'; ?></div>
		    	
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

	function showDetail22(id){
		$('tr.normal.' + id).toggle();
		$('tr.expand.' + id).toggle();

		updateAllScrolls();
	}
	
	var newWindowWidth = $(window).width();
	if (newWindowWidth < 1024){
		$('.new_design tr.normal').click(function(){
			ids = $(this).attr("class").split(' ');
			showDetail22(ids[1]);
		});
		$('.new_design tr.expand').click(function(){
			ids = $(this).attr("class").split(' ');
			showDetail22(ids[1]);
		});

		$('.book').click(function(event){
			event.preventDefault();
		
			var oldSlide = $('#column1');
			var newSlide = $('#column1');
			//var url = 'include/elements/flight_recap.php';
			var url = 'include/elements/trip_info.php?page=signin';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	} else {
		$('.new_design').click(function(){
			showDetail22($(this).attr('id'));
		});

		$('.book').click(function(event){
			event.preventDefault();
		
			var oldSlide = $('#column1');
			var newSlide = $('#column1');
			//var url = 'include/elements/flight_recap.php';
			var url = 'include/elements/trip_info.php?page=signin';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	}
	
</script>