<div style="position:relative;">
	<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="javascript:closePage();"></a> 99 add-ons results</h1>
</div>
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
							<td style="vertical-align: top; width:45%;">
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

<script>
function closePage(){
	url = 'include/pages/book_directly/trip_add_ons.php';
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