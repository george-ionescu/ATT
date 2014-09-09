
			       
				       <table class="flight_detail_table recap">
    				<tr>
    					<td colspan="4" class="title">depart 18 feb 2014</td>
    				</tr>
    				<tr>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line"><span>Stop in LHR London 2h 00m</span></p></td>
    				</tr>
    				<tr>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line"><span>Stop in LHR London 2h 00m</span></p></td>
    				</tr>
    				<tr>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line">&nbsp;</p></td>
    				</tr>
    			</table>
    			
    			<br />
    			<table class="flight_detail_table recap">
    				<tr>
    					<td colspan="4" class="title">return 18 feb 2014</td>
    				</tr>
    				<tr>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line"><span>Stop in LHR London 2h 00m</span></p></td>
    				</tr>
    				<tr>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line">&nbsp;</p></td>
    				</tr>
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
		<a class="more" href="#"><i class="fa fa-plus-circle"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="fa fa-minus-circle"></i>less</a>
	</p>
	
	<p id="option2" style="display: none;">
		Ticket price policies. Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<span class="text-complete">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia
		</span> 
		<a class="more" href="#"><i class="fa fa-plus-circle"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="fa fa-minus-circle"></i>less</a>
	</p>
	
	<p id="option3" style="display: none;">
		Baggage policies. Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
		<span class="text-complete">
			Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia
		</span> 
		<a class="more" href="#"><i class="fa fa-plus-circle"></i>more</a>
		<a class="less" style="display: none;" href="#"><i class="fa fa-minus-circle"></i>less</a>
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







    			
