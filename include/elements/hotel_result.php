<?php 
//type = 1 -> simple
//type = 2 -> with flight 
//type = 3 -> with compare
//type = 4 -> with flight and compare
//type = 5 -> top picks

if ($_GET['type'] == 5){
	$hotelCount = 1;
} else {
	$hotelCount = 10;
}
?>

<?php if ($_GET['type'] != 5) { ?>
	<div style="position:relative;">
		<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> 999 hotel results</h1>
	</div>
<?php } ?>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php if ($_GET['type'] != 5) { ?>
			<?php for ($i=1; $i<=$hotelCount; $i++) { ?>
				<div class="row">
					<div id="hotel<?php echo $i; ?>" class="hotel_detail type<?php echo $_GET['type']; ?> <?php echo $_GET['from']; ?> <?php if ($_GET['type'] == 5) { ?>active<? } ?>" <?php if ($_GET['type'] == 5) { ?>style="border-bottom:none;"<?php } ?>>
						<p class="title">Radisson Blu Edwardian Berkshire (type <?php echo $_GET['type']; ?>)</p>
				
						<table>
							<tr>
								<td style="vertical-align: top; width:55%;">
									<div style="position: relative; display: block; margin-right: 15px;">
										<span class="room_detail"><i class="fa fa-info-circle"></i></span> 
										
										<div class="clearfix"></div>
										<div style="display: block; max-height:110px; overflow:hidden;">
											<img class="img-responsive col-xs-12 nopadding" src="images/backendtbs.cloudapp.net.jpg" alt="" />
										</div>
									</div>
								</td>
								<td style="vertical-align: top;">
									<img src="images/star_white.png" alt="" style="margin-top: -10px;" /> 
									<img src="images/star_white.png" alt="" style="margin-top: -10px;" /> 
									<img src="images/star_white.png" alt="" style="margin-top: -10px;" />
									<img src="images/star_white.png" alt="" style="margin-top: -10px;" /> 
									<img src="images/star_white.png" alt="" style="margin-top: -10px;" />
									<p class="price_p">
										starting from<br /><span class="price">254 </span>EUR<br />total price
									</p>
								</td>
							</tr>
							<tr>
								<td class="special_link" colspan="2" style="padding-top:5px;">
									<a href="#" class="map"><i class="fa fa-map-marker"></i> map view</a>
									<?php if ($_GET['type'] == 3 || $_GET['type'] == 4) { ?>
									| <a class="compare" href="#"><i class="fa fa-files-o"></i> compare price</a>
									<?php } ?>
									<?php if ($_GET['type'] == 2 || $_GET['type'] == 4) { ?>
									| <a class="flight" href="#"><i class="fa fa-plane"></i> flight included</a>
									<?php } ?>
								</td>
							</tr>
						</table>
						
						<hr />
					</div>
				</div>
			<?php } ?>
		<?php } ?>
		<?php if ($_GET['type'] == 5) { include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/hotel_info_tips.php'; } ?>
	</div>
	
</div>



<?php if ($_GET['type'] == 5) { ?>
	<script>
		function openNext(){
			var oldSlide = $('#column2');
			var newSlide = $('#column2');
			var url = 'include/elements/rooms_and_rates_top.php'; 
		
			var class_bootstrap = 'col-md-3 noborder darkgrey';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
				updateAllScrolls();
			}
		}
		
		t = setTimeout(openNext, 400);
	
	</script>

<?php } else { ?>
	<script>
		function closePage(){
			url = 'include/pages/book_directly/hotels.php';
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
	</script>
<?php } ?>