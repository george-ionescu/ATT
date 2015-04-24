<h1 class="pull-right">Trip Information</h1>
        <div class="clearfix"></div>
        
        <div class="column_content padding_column_content full_height">
	        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="page5_2.php">

				<div id="add_on_trip">
					<div class="form-group">
						<div class="row_form">
							<div class="col-md-12 short_padding">
								<span class="custom-dropdown">
								    <select>
								        <option>Option 1</option>
								        <option>Option 2</option>  
								        <option>Option 3</option>
								        <option>Option 4</option>
								        <option>Option 5</option>
								    </select>
								</span>
							</div>
						</div>
						
						<div class="row_form">
							<div class="custom_input_slide small">
								<p class="box_title pull-left">rooms</p>
								
								<div class="custom_input_slide_content rooms small pull-right room">
									<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
									<div class="pull-left">
										<span class="counterValue number_big pull-left">01</span>
										<div class="clearfix"></div>
									</div>
									<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
							
						<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/rooms_flight.php'; ?>
					</div>
	
	
	
				</div>
				
				<div class="clearfix"></div>
				<br />
				<button id="submit_button" type="submit" class="btn btn-default">proceed</button>
			</form>
		</div>
		
<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column2');
			var newSlide = $('#column2');
			var url = 'include/elements/load.php?page=sort_hotel';
			//var url = 'include/elements/load.php?page=sort_flight_hotel';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>
		