<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> Activity Details</h1>
</div>
<div class="clearfix"></div>


<div class="column_content nopadding full_height">
	<div class="padding_column_content">
		<p style="margin-top: 3px;">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
			<span class="text-complete">Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia</span> 
			<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
			<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
		</p>
	</div>
	
	<h1 class="pull-right" style="margin-bottom: 0px;">Activity Options</h1>
	<div class="clearfix"></div>

	<div class="padding_column_content">
		<form class="form-horizontal custom_form" role="form" method="post" action="/">
			
			<?php for ($i=1; $i<=2; $i++) { ?>
				<div id="activity<?php echo $i; ?>">
					<p class="flight_title"><span class="black white_on_mobile">1st Combo Ticket includes: Upper Belvedere, Lower Belvedere, Orangery, Privy Garden, </span></p>
					
					<div class="row_form">
						<div class="col-md-12 col-xs-12 short_padding text_align_left">
							<span class="custom-dropdown">
							    <select>
							        <option>activity option</option>
							        <option>Option 2</option>  
							        <option>Option 3</option>
							        <option>Option 4</option>
							        <option>Option 5</option>
							    </select>
							</span>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row_form">
						<div class="col-md-12 col-xs-12 short_padding text_align_left">
							<span class="custom-dropdown">
							    <select>
							        <option>operating date</option>
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
					
					<button type="submit" class="pull-right btn btn-default book" style="margin-top: 9px; margin-left:10px;">book</button>
					<p class="pull-right price_p" style="text-align: right;"><span class="price">255</span> EUR<br />total price</p>
					<div class="clearfix"></div>
					<br />
					<hr />
				</div>
			<?php } ?>
		</form>
	</div>
</div>

<script>
	$('.book').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column4');
		var newSlide = $('#column4');
		var url = 'include/elements/service_info.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	});

	function closePage(){
		url = 'include/elements/service_result.php';
		$.get(url, function( data ) {
			hidePreloader();
			$('#column2').show();
			$('#column2').html(data);
			
			closeSlideById('column3');
		});
	}
		
</script>
