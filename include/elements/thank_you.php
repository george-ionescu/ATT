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
								<a id="but1" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/book_directly/flights.php">
									<span class="sidebar">Flights</span>
									<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 nopadding">
								<a id="but2" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/book_directly/hotels.php">
									<span class="sidebar">Hotels</span>
									<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 nopadding">
								<a id="but3" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/book_directly/flights_hotels.php">
									<span class="sidebar">Flights & Hotels</span>
									<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 nopadding">
								<a id="but4" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/add_ons/trip_add_ons.php">
									<span class="sidebar">Trip add-ons</span>
									<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								</a>
							</div>
						</div>
					</div>
		        </div>
		        
		        
		        
		        <script>

		        createBreadcrump([]);


		        
	$(function(){
		//open/close column
		$('a.slide').click(function(event){
			event.preventDefault();
			event.stopPropagation();
			
			if (!$(this).hasClass('active')){
				$('a.slide').removeClass('active');
				$(this).addClass('active');
				
				$('a.slide').parent().parent().removeClass('active');
				$(this).parent().parent().addClass('active');
				
				if ($(this).hasClass('assisted')){
					$(this).find('.button_after_big_info').removeClass('active');
					$(this).find('.button_after_big_info').find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
				}
				
				var oldSlide = $('#' + $(this).attr('column-close'));
				var newSlide = $('#' + $(this).attr('column-open'));
				var url = $(this).attr('href');
				var class_bootstrap = 'col-md-3';
				
				if (oldSlide && newSlide && url != '#'){
					changeSlide(oldSlide, newSlide, url, class_bootstrap);
				}
			}
		});
		});
</script>