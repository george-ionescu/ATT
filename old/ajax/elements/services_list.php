<div class="container-fluid">
	<?php for ($i=1; $i<=6; $i++) { ?>
		<div class="row">
			<div id="trip<?php echo $i; ?>" class="hotel_detail trip">
				<p>Walking tour Vienna express: 1 hour - for those <br />without much time</p>
		
				<table>
					<tr>
						<td style="vertical-align: top;">
							<div style="position: relative; display: block; margin-right: 15px;">
								<span class="room_detail">details</span> 
								<img class="img-responsive col-xs-12 nopadding" src="images/hotel_icon.jpeg" alt="" style="max-height: 100px;" />
							</div>
						</td>
						<td style="vertical-align: top;">
							<br />
							<p class="price_p">
								from <span class="price">34.50</span> euro <br />with 6 activity options
							</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	<?php } ?>
</div>