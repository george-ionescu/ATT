<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> Rooms & Rates</h1>
</div>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height text_align_left top_picks" style="margin-top: 5px;">
	<form class="form-horizontal custom_form" role="form" method="post" action="page1_2_2.php">
		<?php for ($i=1; $i<=3; $i++) { ?>
			<div id="option<?php echo $i; ?>">
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
				
				<button type="submit" class="pull-right btn btn-default book" style="margin-top: 9px; margin-left:10px;">book</button>
				<p class="pull-right price_p" style="text-align: right;"><span class="price">255</span> EUR<br />total price</p>
				<div class="clearfix"></div>
				
				<div style="margin-top: 10px;">
					<a class="slide" column-close="column4" column-open="column4" href="include/elements/hotel_policy.php"><i class="ionicons ion-ios-plus-outline"></i>room policy</a>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<?php if (1==2){?>
					|&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="slide" column-close="column4" column-open="column4" href="include/elements/hotel_info.php"><i class="ionicons ion-ios-plus-outline"></i>hotel info</a>
				<?php } ?>
				</div>
				<hr />
			</div>
		<?php } ?>
	</form>
</div>

<script>
function closePage(){
	/*url = 'include/elements/hotel_result.php?type=<?php echo $_GET['type']; ?>';
	$.get(url, function( data ) {
		hidePreloader();
		$('#column2').show();
		$('#column2').html(data);
		
		closeSlideById('column3');
	});*/

	var oldSlide = $('#column2');
	var newSlide = $('#column2');
	var url = 'include/elements/sort_hotel.php';
	var class_bootstrap = 'col-md-3';
	
	changeSlide(oldSlide, newSlide, url, class_bootstrap);
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

		$(this).html('selected').addClass('active');
	
		var oldSlide = $('#column3');
		var newSlide = $('#column3');
		var url = 'include/elements/extra_service.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
			//closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	});
});
</script>
