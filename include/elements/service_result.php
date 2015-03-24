<h1 class="pull-right">Choose Service</h1>
<div class="clearfix"></div>

<div class="column_content nopadding full_height">
	<div class="container-fluid">
		<?php for ($i=1; $i<=6; $i++) { ?>
			<div class="row">
				<div id="service<?php echo $i; ?>" class="hotel_detail service">
					<p class="title">Walking tour Vienna express: 1 hour - for those without much time</p>
			
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
								<p class="price_p">
									starting from<br /><span class="price">254 </span>EUR<br />total price
								</p>
							</td>
						</tr>
					</table>
					
					<hr />
				</div>
			</div>
		<?php } ?>
	</div>
</div>