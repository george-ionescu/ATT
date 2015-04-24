<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> Information</h1>
</div>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
		
	<div class="service_info_top">
		Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<div class="text-complete">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia
			<div class="clearfix"></div>
			
			<div id="photo_container" style="text-align: center;">
				<?php for ($i=1; $i<=6; $i++) { ?>
					<div class="box">
						<a href="images/hotels/<?php echo $i; ?>.jpg" rel="group">
							<img src="images/hotels/thumbs/<?php echo $i; ?>.jpg" alt="" />
						</a>
					</div> 
				<?php } ?>
			</div>
		</div> 
		<div class="clearfix"></div>
		<a class="more pull-left" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
		<a class="less pull-left" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	
	
		
	<h1 class="pull-right" style="margin-right: 0px;">Special Requirements</h1>
	<div class="clearfix"></div>
	
	<p style="margin-top: 3px;">
		Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<span class="text-complete">Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia</span> 
		<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
	</p>
		
	<h1 class="pull-right" style="margin-right: 0px;">Cancellation Policy</h1>
	<div class="clearfix"></div>
	
	<p style="margin-top: 3px;">
		Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<span class="text-complete">Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia</span> 
		<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
	</p>
	
	
	<br />
	<div style="text-align: center;">
		<button id="book_button" type="button" class="btn btn-default">proceed</button>
	</div>
	<br /><br />
</div>


<script>
	$(function(){
		activateMoreLess();
	});

	function closePage(){
		url = 'include/elements/service_detail.php?type=service';
		$.get(url, function( data ) {
			hidePreloader();
			$('#column3').show();
			$('#column3').html(data);
			
			closeSlideById('column4');
		});
	}

	$('#book_button').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'include/elements/trip_info.php?page=signin';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	});
</script>
