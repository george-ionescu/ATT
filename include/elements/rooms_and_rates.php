<h1 class="pull-right">Rooms & Rates</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height text_align_left" style="margin-top: 5px;">
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
				
				<p class="pull-left price_p"><span class="price">255</span> euro per package</p>
				<button type="submit" class="pull-right btn btn-default book" style="margin-top: 9px;">book</button>
				<div class="clearfix"></div>
				
				<div style="margin-top: 5px;">
					<a class="slide" column-close="column4" column-open="column4" href="include/elements/hotel_policy.php"><i class="fa fa-plus-circle"></i>room policy</a>
				&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
					<a class="slide" column-close="column4" column-open="column4" href="include/elements/hotel_info.php"><i class="fa fa-plus-circle"></i>hotel info</a>
				</div>
				<hr />
			</div>
		<?php } ?>
	</form>
</div>

<script>
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
});
</script>
