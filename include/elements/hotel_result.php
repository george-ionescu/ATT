<?php 
//type = 1 -> simple
//type = 2 -> with flight 
//type = 3 -> with compare
//type = 4 -> with flight and compare
//type = 5 -> top picks
?>

<h1 class="pull-right">999 hotel results</h1>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php for ($i=1; $i<=10; $i++) { ?>
			<div class="row">
				<div id="hotel<?php echo $i; ?>" class="hotel_detail type<?php echo $_GET['type']; ?>">
					<p>Radisson Blu Edwardian Berkshire <?php echo $i; ?> (type <?php echo $_GET['type']; ?>)</p>
			
					<table>
						<tr>
							<td style="vertical-align: top; width:55%;">
								<div style="position: relative; display: block; margin-right: 15px;">
									<span class="room_detail">room details</span> 
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
								<p class="price_p">
									<span class="price">254 euro</span><br />total price
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
	</div>
</div>