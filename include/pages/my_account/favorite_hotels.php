<h1 class="pull-right">Favorite Hotels</h1>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php for ($i=1; $i<=5; $i++) { ?>
			<div class="row">
				<div id="hotel<?php echo $i; ?>" class="hotel_detail favorite">
					<p>Radisson Blu Edwardian Berkshire 1</p>
			
					<table>
						<tr>
							<td style="vertical-align: top; width:55%;">
								<div style="position: relative; display: block; margin-right: 15px;">
									<span class="room_detail">hotel details</span> 
									<div class="clearfix"></div>
									<img class="img-responsive col-xs-12 nopadding" src="images/hotel_icon.jpeg" alt="" style="max-height: 110px;" />
								</div>
							</td>
							<td style="vertical-align: top; width:45%;">
								<img src="images/star_white.png" alt="" style="margin-top: -10px;" /> 
								<img src="images/star_white.png" alt="" style="margin-top: -10px;" /> 
								<img src="images/star_white.png" alt="" style="margin-top: -10px;" />
								<img src="images/star_white.png" alt="" style="margin-top: -10px;" /> 
								<img src="images/star_white.png" alt="" style="margin-top: -10px;" />
								
								<button type="button" class="btn btn-default search" style="margin-top: 9px; width:100%;">begin search</button>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="padding-top:5px;">
								<a href="#" class="map">map view</a> | <a href=""><i class="fa fa-times-circle-o"></i>remove</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		<?php } ?>
	</div>
</div>


<script>
$(document).ready(function(){
	callFormEvents();

	$('.search').click(function(event){
		event.preventDefault();
		event.stopPropagation();

		$('#column3x').hide();
		$('#column3gmap').hide();
		
		var url = 'include/pages/my_account/favorite_detail.php'; 
		var oldSlide = $('#column3');
		var newSlide = $('#column3');
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	});
	
	//open hotel detail
	$('.hotel_detail').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		$("#column2 .column_content").mCustomScrollbar("scrollTo", '#' + $(this).attr('id'),{
			  scrollInertia:1000
		});
		
		var foo = false;
		if ($('#flight_content').is(':visible') || $('#compare_content').is(':visible') || $('#column3gmap').is(':visible')){
			foo = true;
		}
		
		if (!$(this).hasClass('active') || foo){
			$('.hotel_detail').removeClass('active');
			$(this).addClass('active');
			
			$('#column3x').hide();
			$('#column3gmap').hide();
			
			var url = '';
			if ($(this).hasClass('favorite')){
				url = 'include/elements/hotel_info.php'; 
			}
			
			var oldSlide = $('#column3');
			var newSlide = $('#column3');
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		} else {
			$(this).removeClass('active');
			closeSlideById('column3');
		}
	});
	//open hotel special functions
	$('.hotel_detail a').click(function(event){
		event.preventDefault();
		event.stopPropagation();
		
		var foo = false;
		if ($('#column3').is(':visible') || $('#flight_content').is(':visible') || $('#compare_content').is(':visible') || $('#column3gmap').is(':visible')){
			foo = true;
		}
		if ($(this).hasClass('compare') && $('#compare_content').is(':visible')){
			foo = false;
		}
		if ($(this).hasClass('flight') && $('#flight_content').is(':visible')){
			foo = false;
		}
		if ($(this).hasClass('map') && $('#column3gmap').is(':visible')){
			foo = false;
		}
		
		
		if (!$(this).hasClass('active') || foo){
			$('.hotel_detail').removeClass('active');
			$(this).addClass('active');
			$(this).closest('.hotel_detail').addClass('active');
			
			$('#column3').hide();
			$('#column4').hide();
			$('#column3x').hide();
			$('#column3gmap').hide();
			
			if ($(this).hasClass('map')){
				openSlide($('#column3gmap'), null, 'col-md-6');
			}
			if ($(this).hasClass('compare')){
				openSlide($('#column3x'), null, 'col-md-6');
				//align compare with hotel
				hotelId = $(this).closest('.hotel_detail').attr('id');
				hotelId = parseInt(hotelId.replace('hotel', ''));
				marginTop = (hotelId - 1)*$('#compare_content').height()+(6*(hotelId - 1)) - (5*(hotelId));
				//
				$('#flight_content').hide();
				$('#compare_content').show();
				$('#compare_content').css('margin-top', marginTop);
			}
			if ($(this).hasClass('flight')){
				openSlide($('#column3x'), null, 'col-md-6');
				//align compare with hotel
				hotelId = $(this).closest('.hotel_detail').attr('id');
				hotelId = parseInt(hotelId.replace('hotel', ''));
				marginTop = (hotelId - 1)*$('#compare_content').height()+(6*(hotelId - 1)) - (5*(hotelId));
				//
				$('#compare_content').hide();
				$('#flight_content').show();
				$('#flight_content').css('margin-top', marginTop);
			}
		} else {
			$('.hotel_detail').removeClass('active');
			$(this).removeClass('active');
			$(this).closest('.hotel_detail').removeClass('active');
			
			$('.map').removeClass('active');
			$('.compare').removeClass('active');
			$('.flight').removeClass('active');
			
			closeSlideById('column4');
			closeSlideById('column3');
			closeSlideById('column3x');
			closeSlideById('column3gmap');
			
			//$('#flight_content').hide();
			//$('#compare_content').hide();
		}
	});
	
	
});
</script>