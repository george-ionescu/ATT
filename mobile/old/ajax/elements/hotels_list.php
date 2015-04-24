<div class="container-fluid">
	<?php for ($i=1; $i<=10; $i++) { ?>
		<div class="row">
			<div id="hotel<?php echo $i; ?>" class="hotel_detail type1">
				<p>Radisson Blu Edwardian Berkshire 1 <?php echo $i; ?></p>
		
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
								<span class="price">254 euro</span><br />per package
							</p>
						</td>
					</tr>
					<tr>
						<td class="special_link" colspan="2" style="padding-top:5px;">
							<a href="#" class="map">map view</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<?php } ?>
</div>