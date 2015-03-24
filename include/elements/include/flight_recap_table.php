<table class="flight_detail_table recap">
	<tbody>
		<tr>
    		<td colspan="4" class="title">depart 18 feb 2014</td>
    	</tr>
		<tr>
			<td style="width:160px;"><span class="departure_time">18:15</span> - 12/12/2015<br>Bucharest
			OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />10h 00m</td>
		<td style="width:160px;"><span class="departure_time">19:00</span> - 12/12/2015<br>Warsaw WAW</td>
		<td style="padding-top: 10px;">LOT Polish Airlines - Flight 646 | E75 | 2 seats
			available |</td>
	</tr>
	<tr>
		<td colspan="4"><p class="horizontal_line">
				<span>Stop overnight in Warsaw WAW </span>
			</p></td>
	</tr>
	<tr>
		<td style="width:160px;"><span class="departure_time">18:15</span> - 12/12/2015<br>Bucharest
			OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />6h 50m</td>
		<td style="width:160px;"><span class="departure_time">19:00</span> - 12/12/2015<br>Warsaw WAW</td>
		<td style="padding-top: 10px;">LOT Polish Airlines - Flight 646 | E75 | 2 seats
				available |</td>
		</tr>
		<tr>
    					<td colspan="4"><p>&nbsp;</p></td>
    				</tr>
	</tbody>
</table>

<table class="flight_detail_table recap">
	<tbody>
		<tr>
    		<td colspan="4" class="title">return 20 feb 2014</td>
    	</tr>
		<tr>
			<td style="width:160px;"><span class="departure_time">18:15</span> - 12/12/2015<br>Bucharest
			OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />10h 00m</td>
		<td style="width:160px;"><span class="departure_time">19:00</span> - 12/12/2015<br>Warsaw WAW</td>
		<td style="padding-top: 10px;">LOT Polish Airlines - Flight 646 | E75 | 2 seats
			available |</td>
	</tr>
	<tr>
		<td colspan="4"><p class="horizontal_line">
				<span>Stop overnight in Warsaw WAW </span>
			</p></td>
	</tr>
	<tr>
		<td style="width:160px;"><span class="departure_time">18:15</span> - 12/12/2015<br>Bucharest
			OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />6h 50m</td>
		<td style="width:160px;"><span class="departure_time">19:00</span> - 12/12/2015<br>Warsaw WAW</td>
		<td style="padding-top: 10px;">LOT Polish Airlines - Flight 646 | E75 | 2 seats
				available |</td>
		</tr>
		
	</tbody>
</table>
			       
				
				
				
				
			
    			
    			<br /><br />
    			<div style="text-align: center">
    					<button id="book_button" type="button" class="btn btn-default">book</button>
    				</div>
    			
    			<br /><br />
    			<a id="but1" class="active" href="javascript:showOption2(1);">Terms and conditions</a> | 
    			<a id="but2" href="javascript:showOption2(2);">Ticket price policies</a>
    			<?php if (1==2) { ?>
    				<a id="but3" href="javascript:showOption2(3);">Baggage policies</a>
    			<?php } ?>
    			
    			<br /><br />
	    		
	    			<p id="option1">
		Terms and conditions. Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<span class="text-complete">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia
		</span> 
		<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
	</p>
	
	<p id="option2" style="display: none;">
		Ticket price policies. Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<span class="text-complete">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia
		</span> 
		<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
	</p>
	
	<p id="option3" style="display: none;">
		Baggage policies. Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<span class="text-complete">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia
		</span> 
		<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
	</p>
	    		
		    			
	  <script>
		function showOption2(nr){
			for (i=1; i<=3; i++){
				$('#option' + i).hide();
				$('#but' + i).removeClass('active');
			}
			$('#option' + nr).show();
			$('#but' + nr).addClass('active');

			if ($('#option' + nr).find('.text-complete').is(":visible")){
				$('#option' + nr).find('.more').show();
				$('#option' + nr).find('.less').hide();
				$('#option' + nr).find('.text-complete').hide();
				updateAllScrolls();
			} 
		}
	 </script>    				







    			
