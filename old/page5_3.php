<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">Thank You!</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <p>
			        Thank you for your purchase!<br />
	Your vouchers will be available under your account tab and we will be seding your invoice soon. <br />
	An helpfull intinerary has been created for you to help you have a great time.
			        </p>
			        <br />
			        <p style="font-size: 18px;">Below you can add a flight
	to your trip.</p><br />
			        
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
			        	<div id="round_trip">
							<?php include 'ajax/pages/include/round_trip.php'; ?>
						</div>
						
						<?php include 'ajax/elements/children_detail.php'; ?>
		
						<?php include 'ajax/elements/search_options_flight.php'; ?>
						
						<div class="clearfix"></div>
						<br />
						<button id="submit_button" type="submit" class="btn btn-default">proceed</button>
						<br /><br /><p>Maybe later</p>
						<br /><br />
			        </form>
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
			var url = 'ajax/pages/load_flight.php';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>