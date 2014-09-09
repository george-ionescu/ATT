<h1 class="pull-right">Trip Information</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div class="form-group has-success has-feedback">
			<label class="control-label input_label col-sm-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;destination:</label>
			<div class="col-sm-9 no_padding_left_right">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city"> 
				<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
			</div>
		</div>
		
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
	        <div class="col-md-6 short_padding pull-left">
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
			<div class="col-md-6 short_padding pull-left">
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
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/rooms.php'; ?>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/search_options_hotel.php'; ?>
		
		<div class="clearfix"></div>
		<br />
		<button id="submit_button" type="submit" class="btn btn-default proceed_button">proceed</button>
	</form>
</div>

<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var url = 'include/elements/load.php?page=sort_hotel_week';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>