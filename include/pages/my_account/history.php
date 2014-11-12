	<h1 class="pull-right">Booking History</h1>
        <div class="clearfix"></div>
        
        <div class="column_content nopadding full_height">
	    	<div class="row">
				<div class="col-md-12 col-xs-12 nopadding">
					<a id="but1" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" href="include/pages/my_account/history_info.php">
						<span class="sidebar">Paris</span>
						<span class="subtitle2">- coming - </span>
						<span class="subtitle">16 Aug 2014 - 20 Aug 2014</span>
						<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12 nopadding">
					<a id="but2" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" href="include/pages/my_account/history_info.php">
						<span class="sidebar">Londra</span>
						<span class="subtitle2">- under way -</span>
						<span class="subtitle">16 Aug 2014 - 20 Aug 2014</span>
						<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12 nopadding">
					<a id="but3" class="slide button_big pull-right account_overview" column-close="column3" column-open="column3" href="include/pages/my_account/history_info.php">
						<span class="sidebar">Madrid</span>
						<span class="subtitle2">- done -</span>
						<span class="subtitle">16 Aug 2014 - 20 Aug 2014</span>
						<img class="img-responsive col-xs-12" src="images/trip_thumb.png" alt="" />
					</a>
				</div>
			</div>
		</div>


<script>
$(document).ready(function(){
	callFormEvents();
	
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
			var class_bootstrap = ($(this).attr('column-class')) ? $(this).attr('column-class') : 'col-md-3';

			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
			}
		}
	});
});
</script>