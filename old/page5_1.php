<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3" id="column1">
				<h1 class="pull-right">Trip add-ons</h1>
		        <div class="clearfix"></div>
		        
		        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="page5_2.php">
	
					<div class="form-group has-success has-feedback">
						<label class="control-label input_label col-sm-3 no_padding_left_right" for="inputSuccess3">&nbsp;&nbsp;&nbsp;destination:</label>
						<div class="col-sm-9 no_padding_left_right">
							<input type="text" class="form-control italic" id="inputSuccess3" placeholder="city"> 
						</div>
					</div>
					
					<div class="custom_input_slide">
						<p class="box_title">from</p>
						<div class="custom_input_slide_content">
							<a href="#" class="arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
							<div class="pull-left">
								<span class="number_big pull-left">01</span>
								<div class="number_small pull-left">
									<p>Dec</p>
									<p>2014</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<a href="#" class="arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="custom_input_slide last">
						<p class="box_title">to</p>
						<div class="custom_input_slide_content">
							<a href="#" class="arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
							<div class="pull-left">
								<span class="number_big pull-left">01</span>
								<div class="number_small pull-left">
									<p>Dec</p>
									<p>2014</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<a href="#" class="arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
							<div class="clearfix"></div>
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
					
					<select>
						<option value="1">option 1</option>
						<option value="2">option 2</option>
					</select>

					
					
					<div class="clearfix"></div>
					<br />
					<div style="text-align: center">
						<button id="submit_button" type="submit" class="btn btn-default">proceed</button>
					</div>
					<br /><br />
				</form>
		    </div>
		    
		    <div class="col-md-3" id="column2"></div>
		    
		    <div class="col-md-3" id="column3"></div>
		    
		    <div class="col-md-3" id="column4"></div>
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>
