<h1 class="pull-right">Recent Searches</h1>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php for ($i=1; $i<=5; $i++) { ?>
			<div class="row">
				<div id="hotel<?php echo $i; ?>" class="hotel_detail favorite recent">
					<p style="font-size: 20px;">Flight & Hotel</p>
					<p>Bucharest, Romania - Antalya, Turkey</p>
					<ul class="menu_column" style="margin-bottom:0;">
						<li style="text-align: left; margin-left:0; padding:0;"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</li>
					</ul>
					<p>2 travellers</p>
			
					<button type="button" class="btn btn-default pull-left" style="margin-top:10px;">search again</button>
					<a class="pull-left" href="" style="margin-top:15px;"> <i class="fa fa-times-circle-o"></i>remove</a>
					<div class="clearfix"></div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>


<script>
$(document).ready(function(){
	callFormEvents();
	
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
			if ($(this).hasClass('recent')){
				url = 'ajax/pages/load_hotel.php'; 
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

});
</script>