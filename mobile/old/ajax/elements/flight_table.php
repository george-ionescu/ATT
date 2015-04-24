<div class="container-fluid full_height full_width">
    <?php for ($i=1; $i<=2; $i++) { ?>	
    	<div class="row">
    		<div class="col-md-2">
    			<div class="price_container">
	    			<p><span class="price">300</span> euro</p>
	    			<button type="submit" class="btn btn-default">book</button>
    			</div>
    		</div>
    		<div class="col-md-10">
    			<table class="flight_detail_table">
    				<tr>
    					<td></td>
    					<td colspan="5" class="title">depart 18 feb 2014</td>
    				</tr>
    				
    				<?php for ($j=1; $j<=2; $j++) { ?>
	    				<tr class="normal depart<?php echo $i; ?><?php echo $j; ?>">
	    					<td style="padding-top:22px;"><label class="radio-inline"><input type="radio" id="inlineCheckbox1" name="fl11" value="option1" checked><span class="check"></span>	 </label></td>
	    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
	    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
	    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
	    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
	    					<td style="padding-top:22px;"><a href="javascript:showDetail22('depart<?php echo $i; ?><?php echo $j; ?>');" class="pull-left"><i class="fa fa-plus-circle"></i>details</a></td>
	    				</tr>
	    				<tr class="expand depart<?php echo $i; ?><?php echo $j; ?>">
	    					<td style="padding-top:22px; border-bottom:5px solid #B8A57B;"><label class="radio-inline"><input type="radio" id="inlineCheckbox1" name="fl11" value="option1" checked><span class="check"></span></label></td>
	    					<td style="padding:0; border-bottom:5px solid #B8A57B;" colspan="4">
		    					<table class="flight_detail_table expanded_table">
				    				<tr>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
				    				</tr>
				    				<tr>
				    					<td colspan="4"><p class="horizontal_line_black"><span>Stop in LHR London 2h 00m</span></p></td>
				    				</tr>
				    				<tr>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
				    				</tr>
				    				<tr>
				    					<td colspan="4"><p class="horizontal_line_black"><span>Stop in LHR London 2h 00m</span></p></td>
				    				</tr>
				    				<tr>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
				    				</tr>
				    			</table>
				    		</td>
				    		<td style="padding-top:22px; border-bottom:5px solid #B8A57B;"><a href="javascript:showDetail22('depart<?php echo $i; ?><?php echo $j; ?>');" class="pull-left"><i class="fa fa-minus-circle"></i>details</a></td>
	    				</tr>
    				<?php } ?>
    			</table>
    			<table class="flight_detail_table">
    				<tr>
    					<td></td>
    					<td colspan="5" class="title" style="padding-top: 20px;">return 18 feb 2014</td>
    				</tr>
    				
    				<?php for ($j=1; $j<=2; $j++) { ?>
	    				<tr class="normal return<?php echo $i; ?><?php echo $j; ?> <?php if ($j==2) echo "noborder"; ?>">
	    					<td style="padding-top:22px;"><label class="radio-inline"><input type="radio" id="inlineCheckbox1" name="fl11" value="option1" checked><span class="check"></span>	 </label></td>
	    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
	    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
	    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
	    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
	    					<td style="padding-top:22px;"><a href="javascript:showDetail22('return<?php echo $i; ?><?php echo $j; ?>');" class="pull-left"><i class="fa fa-plus-circle"></i>details</a></td>
	    				</tr>
	    				<tr class="expand return<?php echo $i; ?><?php echo $j; ?>">
	    					<td style="padding-top:22px; border-bottom:5px solid #B8A57B;"><label class="radio-inline"><input type="radio" id="inlineCheckbox1" name="fl11" value="option1" checked><span class="check"></span></label></td>
	    					<td style="padding:0; border-bottom:5px solid #B8A57B;" colspan="4">
		    					<table class="flight_detail_table expanded_table">
				    				<tr>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
				    				</tr>
				    				<tr>
				    					<td colspan="4"><p class="horizontal_line_black"><span>Stop in LHR London 2h 00m</span></p></td>
				    				</tr>
				    				<tr>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
				    				</tr>
				    				<tr>
				    					<td colspan="4"><p class="horizontal_line_black"><span>Stop in LHR London 2h 00m</span></p></td>
				    				</tr>
				    				<tr>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td class="airplane"><img src="images/airplane_icon.png" alt="" /> 3h 25m</td>
				    					<td><span class="departure_time">09:30</span><br />OTP Bucharest</td>
				    					<td>American Airlines - Flight 6358 | economy<br/>2 stops | terminal shift | stop overnight</td>
				    				</tr>
				    			</table>
				    		</td>
				    		<td style="padding-top:22px; border-bottom:5px solid #B8A57B;"><a href="javascript:showDetail22('return<?php echo $i; ?><?php echo $j; ?>');" class="pull-left"><i class="fa fa-minus-circle"></i>details</a></td>
	    				</tr>
    				<?php } ?>
    			</table>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<hr />
    		</div>
    	</div>
    <?php } ?>	
</div>
    
    
    
    
<script>
	function showDetail22(id){
		$('tr.normal.' + id).toggle();
		$('tr.expand.' + id).toggle();

		updateAllScrolls();
	}
</script>