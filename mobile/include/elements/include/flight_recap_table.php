<table class="flight_detail_table recap">
	<tbody>
		<tr>
    		<td colspan="4" class="title">depart 18 feb 2014</td>
    	</tr>
		<tr>
			<td style="width:160px;"><span class="departure_time">18:15 - 12 Sep 2015</span><br>Bucharest OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />10h 00m</td>
		<td style="width:160px;"><span class="departure_time">19:00</span> - 12 Sep 2015<br>Warsaw WAW</td>
		<td style="padding-top: 10px;">LOT Polish Airlines - Flight 646 | E75 | 2 seats
			available |</td>
	</tr>
	<tr>
		<td colspan="4"><p class="horizontal_line">
				<span>Stop overnight in Warsaw WAW </span>
			</p></td>
	</tr>
	<tr>
		<td style="width:160px;"><span class="departure_time">18:15 - 12 Sep 2015</span><br>Bucharest OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />6h 50m</td>
		<td style="width:160px;"><span class="departure_time">19:00 - 12 Sep 2015</span><br>Warsaw WAW</td>
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
			<td style="width:160px;"><span class="departure_time">18:15 - 12 Sep 2015</span><br>Bucharest OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />10h 00m</td>
		<td style="width:160px;"><span class="departure_time">19:00 - 12 Sep 2015</span><br>Warsaw WAW</td>
		<td style="padding-top: 10px;">LOT Polish Airlines - Flight 646 | E75 | 2 seats
			available |</td>
	</tr>
	<tr>
		<td colspan="4"><p class="horizontal_line">
				<span>Stop overnight in Warsaw WAW </span>
			</p></td>
	</tr>
	<tr>
		<td style="width:160px;"><span class="departure_time">18:15 - 12 Sep 2015</span><br>Bucharest OTP</td>
		<td style="width:80px;" class="airplane"><img
			src="assets/images/airplane_icon.png"
			alt="Flight duration"><br />6h 50m</td>
		<td style="width:160px;"><span class="departure_time">19:00 - 12 Sep 2015</span><br>Warsaw WAW</td>
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







    			
