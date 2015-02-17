<div style="position:relative;">
	<a class="hide_on_desktop close_button_mobile" href="javascript:closePage();" class="pull-left"><i class="fa fa-angle-left"></i> close</a> 
	<h1 class="pull-right">Rooms & Rates</h1>
</div>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height text_align_left" style="margin-top: 5px;">
	<form class="form-horizontal custom_form" role="form" method="post" action="page1_2_2.php">
		<?php for ($i=1; $i<=3; $i++) { ?>
			<div id="room_info<?php echo $i; ?>">
				<p class="flight_title first">1st room</p>
				<div class="row_form">
					<div class="col-md-12 short_padding">
						<span class="custom-dropdown">
						    <select>
						        <option>Option 1</option>
						        <option>Option 2</option>  
						        <option>Option 3</option>
						        <option>Option 4</option>
						        <option>Option 5</option>
						    </select>
						</span>
					</div>
				</div>
				<p class="flight_title first">2nd room</p>
				<div class="row_form">
					<div class="col-md-12 short_padding">
			        	<p class="room_description">Lorem Ipsum is simply dummy</p>
			        </div>
				</div>
				
				<p class="pull-left price_p"><span class="price">255</span> EUR<br />total price</p>
				<button type="submit" class="pull-right btn btn-default book" style="margin-top: 9px;">book</button>
				<div class="clearfix"></div>
				
				<div style="margin-top: 5px;">
					<a class="slide hotel_policy" column-close="column4" column-open="column4" href="include/elements/hotel_policy.php?type=<?php echo $_GET['type']; ?>"><i class="ionicons ion-ios-plus-outline"></i>room policy</a>
				&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="slide hotel_info" column-close="column4" column-open="column4" href="include/elements/hotel_info.php?type=<?php echo $_GET['type']; ?>"><i class="ionicons ion-ios-plus-outline"></i>hotel info</a>
				</div>
				<hr />
			</div>
		<?php } ?>
	</form>
</div>

<script>
function closePage(){
	url = 'include/elements/hotel_result.php?type=<?php echo $_GET['type']; ?>';
	$.get(url, function( data ) {
		hidePreloader();
		$('#column2').show();
		$('#column2').html(data);
		
		closeSlideById('column3');
	});
}

$(document).ready(function(){
	$('a.slide').click(function(event){
		event.preventDefault();
		if (!$(this).hasClass('active')){
			$('a.slide').removeClass('active');
			$('a.slide').find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
	
			$(this).addClass('active');
			$(this).find('.fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
				
			var oldSlide = $('#' + $(this).attr('column-close'));
			var newSlide = $('#' + $(this).attr('column-open'));
			var url = $(this).attr('href');
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		} else {
			$('a.slide').removeClass('active');
			$('a.slide').find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');

			closeSlideById($(this).attr('column-open'));
		}
	});

	$('.book').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'include/elements/trip_info.php?page=<?php echo $_GET['page']; ?>';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	});




	function openNext(){
		var oldSlide = $('#column4');
		var newSlide = $('#column4');
		var url = 'include/elements/hotel_info.php';

		var class_bootstrap = 'col-md-3 nopadding';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
			updateAllScrolls();

			$('#room_info1').find('.hotel_info').addClass('active').find('.fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
		}
	}

	if ($(window).width() >= 1024){
		setTimeout(openNext, 400);
	}
});
</script>
