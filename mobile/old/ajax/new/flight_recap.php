<h1 class="pull-right">Your selcted flight from Bucharest to Antigua</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <div class="flight_detail_wrapper">
				        <table class="flight_detail_table recap">
    				<tr>
    					<td colspan="4" class="title">depart 18 feb 2014</td>
    				</tr>
    				<tr>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td class="vbottom"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line"><span>Stop in LHR London 2h 00m</span></p></td>
    				</tr>
    				<tr>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td class="vbottom"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line"><span>Stop in LHR London 2h 00m</span></p></td>
    				</tr>
    				<tr>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td class="vbottom"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
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
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td class="vbottom"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line"><span>Stop in LHR London 2h 00m</span></p></td>
    				</tr>
    				<tr>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td class="vbottom"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
    					<td>OTP Bucharest<br /><span class="departure_time">09:30</span></td>
    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
    				</tr>
    				<tr>
    					<td colspan="4"><p class="horizontal_line">&nbsp;</p></td>
    				</tr>
    			</table>
    			
    			<br />
    			<a id="but1" class="active" href="javascript:showOption(1);">Terms and conditions</a> | <a id="but2" href="javascript:showOption(2);">Ticket price policies</a> | <a id="but3" href="javascript:showOption(3);">Baggage policies</a>
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
	    		
		    			
	    				<div class="clearfix"></div>
	    				<br />
	    				<div style="text-align: center">
	    					<button id="foo" type="button" class="btn btn-default">book</button>
	    				</div>
	    				<br /><br />
	    			</div>
		        </div>






    			
<script>
	$(function(){
		activateMoreLess();
	});
	
	function showOption(nr){
		for (i=1; i<=3; i++){
			$('#option' + i).hide();
			$('#but' + i).removeClass('active');
		}
		$('#option' + nr).show();
		$('#but' + nr).addClass('active');
	}

	$('#foo').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'ajax/new/trip_info.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	});
</script>