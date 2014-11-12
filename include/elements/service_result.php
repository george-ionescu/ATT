<h1 class="pull-right">Choose Service</h1>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php for ($i=1; $i<=6; $i++) { ?>
			<div class="row">
				<div id="service<?php echo $i; ?>" class="hotel_detail service">
					<p>Walking tour Vienna express: 1 hour - for those without much time</p>
			
					<table>
						<tr>
							<td style="vertical-align: top;">
								<div style="position: relative; display: block; margin-right: 10px;">
									<span class="room_detail">details</span> 
									<img class="img-responsive col-xs-12 nopadding service_image" src="images/service_icon.jpeg" alt="" />
								</div>
							</td>
							<td style="vertical-align: top;">
								<p class="price_p">
									starting from <br /><span class="price">34.50</span> EUR <br />with 6 activity options
								</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		<?php } ?>
	</div>
</div>