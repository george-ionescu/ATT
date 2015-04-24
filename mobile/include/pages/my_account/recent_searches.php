<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="my_account.php"></a> Recent Searches</h1>
</div>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php for ($i=1; $i<=5; $i++) { ?>
			<div class="row">
				<div id="hotel<?php echo $i; ?>" class="hotel_detail favorite recent">
					<p style="font-size: 20px;">Flight & Hotel</p>
					<p>Bucharest, Romania - Antalya, Turkey</p>
					
					<p>2 travellers</p>
					
					<ul class="menu_column2" style="margin-bottom:0;">
						<li style="text-align: left; margin-left:0; padding:0;">
							<span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec
						</li>
					</ul>
					
			
					<button type="button" class="btn btn-default pull-left recent_button" style="margin-top:10px;">search again</button>
					<a class="pull-right" href="" style="margin-top:20px; margin-left:5px;"> <i class="ionicons ion-ios-close-outline"></i>remove</a>
					<div class="clearfix"></div>
					
					<hr />
				</div>
			</div>
		<?php } ?>
	</div>
</div>

<script>
function closePage(){
	url = 'include/pages/book_directly/flights.php';
	$.get(url, function( data ) {
		hidePreloader();
		$('#column1').show();
		$('#column1').html(data);
		
		closeSlideById('column2');

		$('#info_button').hide();
		$('#sort_button').hide();
		$('#sort_wrapper').html("");
	});
}

$('.recent_button').click(function(event){
	event.preventDefault();
	event.stopPropagation();

	var foo = false;
	if (!$(this).parent().hasClass('active') || foo){
		$('.special_link a').removeClass('active');
		$('.hotel_detail').removeClass('active');
		$('.hotel_detail').removeClass('special');
		$(this).parent().addClass('active');
		
		$('#column3').hide();
		$('#column4').hide();
		$('#column3x').hide();
		$('#column3gmap').hide();
		
		var url = '';
		if ($(this).parent().hasClass('type1')){
			url = 'include/elements/rooms_and_rates.php?page=signin&type=1'; 
		}
		if ($(this).parent().hasClass('type2')){
			url = 'include/elements/rooms_and_rates.php?page=flight_tabs&type=2'; 
		}
		if ($(this).parent().hasClass('type3')){
			url = 'include/elements/rooms_and_rates.php?page=signin&type=3'; 
		}
		if ($(this).parent().hasClass('type4')){
			url = 'include/elements/rooms_and_rates.php?page=flight_tabs&type=4'; 
		}
		if ($(this).parent().hasClass('service')){
			url = 'include/elements/service_detail.php?type=service'; 
		}
		if ($(this).parent().hasClass('recent')){
			url = 'include/elements/load.php?page=sort_hotel.php?type=recent';
		}

		var oldSlide = $('#column3');
		var newSlide = $('#column3');
		var class_bootstrap = 'col-md-6 noborder';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	} else {
		$(this).parent().removeClass('active');
		closeSlideById('column3');
		$('#column4').hide();
	}
});

</script>