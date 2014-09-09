<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">Thank You!</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
			        <p style="text-align: left; margin-left:15px; margin-right:15px;">
			        Thank you for your purchase!<br />
	Your vouchers will be available under your account tab and we will be seding your invoice soon. <br />
	An helpfull intinerary has been created for you to help you have a great time.
			        </p>
			        <br />
			        <p style="font-size: 18px;">Below you can add a flight
	to your trip.</p>
					<br />
					<div class="nopadding full_height" id="column1_content">
						<div class="row">
							<div class="col-md-12 nopadding">
								<a id="but2" class="slide button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/hotels.php">
									<span class="sidebar">Hotels</span>
									<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 nopadding">
								<a id="but4" class="button_big pull-right" href="page4.php">
									<span class="sidebar">Trip add-ons</span>
									<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								</a>
							</div>
						</div>
					</div>
		        </div>
		    </div>
		    
		    <div class="col-md-3 nopadding" id="column2"></div>
		    
		    <div class="col-md-3 nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		    
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>

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

			var oldSlide = $('#column2');
			var newSlide = $('#column2');
			var url = 'ajax/pages/load_add_on.php';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>