<h1 class="pull-right">Trip Information</h1>
<div class="clearfix"></div>

<form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
	
	<div class="form-group has-success has-feedback">
		<label class="control-label input_label col-sm-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;from:</label>
		<div class="col-sm-9 no_padding_left_right">
			<input type="text" class="form-control italic" id="inputSuccess3" placeholder="city/airport name"> 
			<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
		</div>
	</div>
	<div class="form-group has-error has-feedback">
		<label class="control-label input_label col-sm-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;to:</label>
		<div class="col-sm-9 no_padding_left_right">
			<input type="text" class="form-control italic" id="inputSuccess3" placeholder="city/airport name"> 
			<span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
		</div>
	</div>
	
	<div class="row_form">
        <div class="col-md-12 short_padding">
			<select>
				<option value="1">option 1</option>
				<option value="2">option 2</option>
			</select>
		</div>
	</div>
	<div class="row_form">
        <div class="col-md-6 short_padding pull-left">
			<select>
				<option value="1">option 1</option>
				<option value="2">option 2</option>
			</select>
		</div>
		<div class="col-md-6 short_padding pull-left">
			<select>
				<option value="1">option 1</option>
				<option value="2">option 2</option>
			</select>
		</div>
	</div>
	
	<div class="custom_input_slide small">
		<p class="box_title pull-left">adults</p>
		
		<div class="custom_input_slide_content small pull-right">
			<a href="#" class="arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
			<div class="pull-left">
				<span class="number_big pull-left">01</span>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="custom_input_slide small">
		<p class="box_title pull-left">children</p>
		<a href="#" class="pull-left"><i class="fa fa-plus-circle"></i>details</a>
		
		<div class="custom_input_slide_content small pull-right">
			<a href="#" class="arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
			<div class="pull-left">
				<span class="number_big pull-left">01</span>
				<div class="clearfix"></div>
			</div>
			<a href="#" class="arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
	
	<br />
	<a href="javascript:toggleSearchOptions();" class="search_options pull-right"><i class="fa fa-plus-circle"></i>Search options</a>
	<div class="clearfix"></div>
	
	<div id="search_options" style="display:none;">
		<div class="row_form">
			<select>
				<option value="1">option 1</option>
				<option value="2">option 2</option>
			</select>
		</div>
		<div class="row_form">
			<label class="radio-inline long_white"> direct flight only <input type="checkbox" value="1"><span class="check"></span> </label> 
		</div>
		<div class="row_form">
			<select>
				<option value="1">option 1</option>
				<option value="2">option 2</option>
			</select>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="clearfix"></div>
	<br />
	<button id="submit_button" type="submit" class="btn btn-default">proceed</button>
	<br /><br />
</form>

<script>
	function toggleSearchOptions(){
		$('#search_options').toggle();
		if (!$('#search_options').is(':visible')){
			$('.search_options .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
		} else {
			$('.search_options .fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
		}
	}

	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var url = 'ajax/pages/load_flight_week.php';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>