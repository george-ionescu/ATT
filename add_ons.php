<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 col-xs-3 nopadding" id="column1">
				<h1 class="pull-right">Trip Add-ons</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		
						<div class="form-group has-success has-feedback">
							<label class="control-label input_label col-sm-3 col-xs-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;city:</label>
							<div class="col-sm-9 col-xs-9 no_padding_left_right">
								<input type="text" class="autocomplete_input form-control" id="inputSuccess3" placeholder="name"> 
							</div>
						</div>
						
						<div class="row_form">
							<div class="col-md-6 col-xs-6 short_padding pull-left">
								<div class="custom_input_slide">
									<p class="box_title">depart</p>
									<div class="custom_input_slide_content">
										<div id="datepicker_from" class="datepicker"></div>
										<div class="pull-left">
											<span class="day number_big pull-left">01</span>
											<div class="number_small pull-left">
												<input type="hidden" class="calendar_value" name="" />
												<p class="month">Dec</p>
												<p class="year">2014</p>
											</div>
											<div class="clearfix"></div>
										</div>
										<a href="#" class="open_calendar arrow_right pull-left"><i class="fa fa-caret-down"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xs-6 short_padding pull-left">
								<div class="custom_input_slide">
									<p class="box_title">return</p>
									<div class="custom_input_slide_content">
										<div id="datepicker_to" class="datepicker"></div>
										<div class="pull-left">
											<span class="day number_big pull-left">01</span>
											<div class="number_small pull-left">
												<input type="hidden" class="calendar_value" name="" />
												<p class="month">Dec</p>
												<p class="year">2014</p>
											</div>
											<div class="clearfix"></div>
										</div>
										<a href="#" class="open_calendar arrow_right pull-left"><i class="fa fa-caret-down"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						
						<div class="row_form">
							<div class="col-md-6 col-xs-6 short_padding pull-left">
								<div class="custom_input_slide">
									<p class="box_title">adults</p>
									<div class="custom_input_slide_content center">
										<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
										<div class="pull-left">
											<span id="counterAdult" class="counterValue number_big pull-left" minvalue="1" maxvalue="9">01</span>
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
											<span id="counterChildren" class="counterValue number_big pull-left">01</span>
											<div class="clearfix"></div>
										</div>
										<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						
						<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/include/child_ages.php'; ?>
						
						<div class="clearfix"></div>
						
						
						
						<br />
						<button id="submit_button" type="submit" class="btn btn-default">proceed</button>
					</form>
				</div>
		    </div>
		    
		    <div class="col-md-3 nopadding" id="column2"></div>
		    
		    <div class="col-md-3 nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		</div>
	</div>
</content>

<?php include 'include/slideshow.php'; ?>

<?php include 'include/footer.php'; ?>

<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column2');
			var newSlide = $('#column2');
			var url = 'include/elements/load.php?page=sort_services';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>