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
	<h1 class="pull-right">999 hotel results</h1>
<?php } else { ?>
	<h1 class="pull-right">Hotel Result</h1>
<?php } ?>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php for ($i=1; $i<=$hotelCount; $i++) { ?>
			<div class="row">
				<div id="hotel<?php echo $i; ?>" class="hotel_detail type<?php echo $_GET['type']; ?> <?php if ($_GET['type'] == 5) { ?>active<? } ?>" <?php if ($_GET['type'] == 5) { ?>style="border-bottom:none;"<?php } ?>>
					<p class="title">Radisson Blu Edwardian Berkshire (type <?php echo $_GET['type']; ?>)</p>
			
					<table>
						<tr>
							<td style="vertical-align: top; width:55%;">
								<div style="position: relative; display: block; margin-right: 15px;">
									<span class="room_detail">room details</span> 
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
									starting from<br /><span class="price">254 euro</span><br />total price
								</p>
							</td>
						</tr>
						<tr>
							<td class="special_link" colspan="2" style="padding-top:5px;">
								<a href="#" class="map">map view</a>
								<?php if ($_GET['type'] == 3 || $_GET['type'] == 4) { ?>
								| <a class="compare" href="#">compare price</a>
								<?php } ?>
								<?php if ($_GET['type'] == 2 || $_GET['type'] == 4) { ?>
								| <a class="flight" href="#">flight included</a>
								<?php } ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
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
		
			var class_bootstrap = 'col-md-3 noborder';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
				updateAllScrolls();
			}
		}
		
		t = setTimeout(openNext, 400);
	
	</script>

<?php } ?>