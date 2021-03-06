<h1 class="pull-right">Activity Details</h1>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="padding_column_content">
		<p style="margin-top: 3px;">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
			<span class="text-complete">Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia</span> 
			<a class="more" href="#"><i class="fa fa-plus-circle"></i>more</a>
			<a class="less" style="display: none;" href="#"><i class="fa fa-minus-circle"></i>less</a>
		</p>
	</div>
	
	<h1 class="pull-right" style="margin-bottom: 0px;">Activity Options</h1>
	<div class="clearfix"></div>

	<div class="padding_column_content">
		<form class="form-horizontal custom_form" role="form" method="post" action="/">
			
			<?php for ($i=1; $i<=2; $i++) { ?>
				<div id="activity<?php echo $i; ?>">
					<p class="flight_title">1st <span class="black">Combo Ticket includes: Upper Belvedere, Lower Belvedere, Orangery, Privy Garden, </span></p>
					
					<div class="row_form">
						<div class="col-md-6 short_padding text_align_left">
							<span class="custom-dropdown">
							    <select>
							        <option>Duration</option>
							        <option>Option 2</option>  
							        <option>Option 3</option>
							        <option>Option 4</option>
							        <option>Option 5</option>
							    </select>
							</span>
							<div class="clearfix"></div>
						</div>
						
						<div class="col-md-6 short_padding text_align_left">
							<span class="custom-dropdown">
							    <select>
							        <option>Date</option>
							        <option>Option 2</option>  
							        <option>Option 3</option>
							        <option>Option 4</option>
							        <option>Option 5</option>
							    </select>
							</span>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
					
					<br />
					<p class="pull-left price_p" style="margin-top: 5px !important;"><span class="price">254</span> euro per package</p>
					<button id="submit_button2" type="button" class="pull-right btn btn-default">select</button>
					<div class="clearfix"></div>
					
					<hr />
				</div>
			<?php } ?>
		</form>
	</div>
</div>

<script>
	/*function openNext(){
		var oldSlide = $('#column4');
		var newSlide = $('#column4');
		var url = 'ajax/pages/trip_info.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	}

	setTimeout(openNext, 400);*/

	$('#submit_button2').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column4');
		var newSlide = $('#column4');
		var url = 'ajax/pages/trip_info.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	});
		
</script>
