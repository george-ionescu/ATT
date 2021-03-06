<h1 class="pull-right">Trip Information</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
		<div class="form-group has-success has-feedback">
			<label class="control-label input_label col-sm-3 col-xs-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;from:</label>
			<div class="col-sm-9 col-xs-9 no_padding_left_right">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city / airport name"> 
				<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
			</div>
		</div>
		
		<div class="form-group has-success has-feedback">
			<label class="control-label input_label col-sm-3 col-xs-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;to:</label>
			<div class="col-sm-9 col-xs-9 no_padding_left_right">
				<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="city / airport name"> 
				<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
			</div>
		</div>
		<div class="clearfix"></div>
		
		<div class="row_form margin_top_block">
	        <label class="control-label input_label col-sm-3 col-xs-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;period:</label>
	        <div class="col-sm-9 col-xs-9 no_padding_left_right">
				<span class="custom-dropdown">
				    <select>
				        <option>period</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		<div class="row_form">
	        <div class="col-md-6 col-xs-6 short_padding pull-left">
				<span class="custom-dropdown">
				    <select>
				        <option>departure day</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
			<div class="col-md-6 col-xs-6 short_padding pull-left">
				<span class="custom-dropdown">
				    <select>
				        <option>no of nights</option>
				        <option>Option 2</option>  
				        <option>Option 3</option>
				        <option>Option 4</option>
				        <option>Option 5</option>
				    </select>
				</span>
			</div>
		</div>
		<div class="clearfix"></div>
		
		<div class="row_form row_form_adult margin_top_block">
			<div class="col-md-6 col-xs-6 short_padding pull-left">
				<div class="custom_input_slide">
					<p class="box_title">adults</p>
					<div class="custom_input_slide_content center">
						<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
						<div class="pull-left">
							<span class="custom-dropdown big">
							    <select id="counterAdult">
							        <option value="1">01</option>
							        <option value="2">02</option>
							        <option value="3">03</option>
							        <option value="4">04</option>
							        <option value="5">05</option>
							        <option value="6">06</option>
							        <option value="7">07</option>
							        <option value="8">08</option>
							        <option value="9">09</option>
							    </select>
							</span>
							<div class="clearfix"></div>
						</div>
						<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-6 short_padding pull-left">
				<div class="custom_input_slide">
					<p class="box_title pull-left">children</p>
					<div class="clearfix"></div>
					
					<div class="custom_input_slide_content children center">
						<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
						<div class="pull-left">
							<span class="custom-dropdown big">
							    <select id="counterChildren">
							    	<option value="0">00</option>
							        <option value="1">01</option>
							        <option value="2">02</option>
							        <option value="3">03</option>
							        <option value="4">04</option>
							        <option value="5">05</option>
							        <option value="6">06</option>
							        <option value="7">07</option>
							        <option value="8">08</option>
							    </select>
							</span>
							<div class="clearfix"></div>
						</div>
						<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/include/children_detail.php'; ?>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/include/child_ages.php'; ?>
		<div class="clearfix"></div>
		
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/search_options_flight.php'; ?>
		
		<div class="clearfix"></div>
		<button id="submit_button" type="submit" class="btn btn-default proceed_button">proceed</button>
	</form>
</div>

<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var url = 'include/elements/load.php?page=sort_flight_week';
			var class_bootstrap = 'col-md-6';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>