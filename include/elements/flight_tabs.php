<h1 class="pull-right">Your selcted flight from Bucharest to Antigua</h1>
    	<div class="clearfix"></div>
    	
    	<div class="column_content padding_column_content full_height">       
	    	<a class="flight_detail_tab tab1 pull-left active" href="#"><span class="title">The Flight</span><br />This is your selected flight</a>
	        <a class="flight_detail_tab tab2 pull-left" href="#"><span class="title">Other Flights</span><br />Here you can choose another flight</a>
	        <div class="clearfix"></div>
	    	
	    	<div id="tab1">
	    		<div class="flight_detail_wrapper">
			        <?php include 'include/flight_recap_table.php'; ?>
			        
    				<div class="clearfix"></div>
    				<br />
    				<div style="text-align: center">
    					<button id="book_button" type="button" class="btn btn-default">book</button>
    				</div>
    				<br /><br />
    			</div>
    		</div>
    		<div id="tab2" style="display: none;">	
    			<form class="form-horizontal custom_form maro_background" role="form" method="post" action="/">
			    	<br />
			    	<?php include 'include/flight_result_table.php'; ?>
				    <div class="clearfix"></div>
		    	</form>
			</div>
	    	
	    </div>
        <div class="clearfix"></div>
        
        
<script>
	$(function(){
		$('.flight_detail_tab').click(function(){
			if ($(this).hasClass('tab1')){
				$('#tab1').show();
				$('#tab2').hide();
				$('#sort_type_1').show();
				$('#sort_type_2').hide();
			}
			if ($(this).hasClass('tab2')){
				$('#tab1').hide();
				$('#tab2').show();
				$('#sort_type_1').hide();
				$('#sort_type_2').show();
			}

			$('.flight_detail_tab').removeClass('active');
			$(this).addClass('active');

			updateAllScrolls();
		});

		$('#tab2 .book').click(function(event){
			event.preventDefault();
			event.stopPropagation();
			
			$('#tab1').show();
			$('#tab2').hide();
			$('#sort_type_1').show();
			$('#sort_type_2').hide();

			$('.flight_detail_tab').removeClass('active');
			$('.flight_detail_tab.tab1').addClass('active');

			updateAllScrolls();
		});
	});
	
	function showDetail22(id){
		$('tr.normal.' + id).toggle();
		$('tr.expand.' + id).toggle();

		updateAllScrolls();
	}

	$('#book_button').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column2');
		var newSlide = $('#column2');
		var url = 'include/elements/signin.php';
		var class_bootstrap = 'col-md-6';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	});
</script>