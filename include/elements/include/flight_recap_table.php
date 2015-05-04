<div class="col-md-12 col-xs-12 flight_detail_bootstrap recap">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<span class="title">depart 13 sept. 2014</span>
		</div>
	</div>
	<div class="row content">
		<div class="col-md-12 col-xs-12">
			<!-- EXPAND -->
			<div class="row normal">
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">18:15 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-2 col-xs-4 airplane">
					<img src="assets/images/airplane_icon.png" alt="Flight duration"><br />16h 50m
				</div>
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">22:22 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-6 col-xs-12">
					LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | 
				</div>
				
				<div class="col-md-12 col-xs-12">
					<p class="horizontal_line_black"><span>2h 30m Stop overnight in Warsaw WAW</span></p>
				</div>
				
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">18:15 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-2 col-xs-4 airplane">
					<img src="assets/images/airplane_icon.png" alt="Flight duration"><br />16h 50m
				</div>
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">22:22 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-6 col-xs-12">
					LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | 
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<span class="title">return 22 sept. 2014</span>
		</div>
	</div>
	<div class="row content">
		<div class="col-md-12 col-xs-12">
			<!-- EXPAND -->
			<div class="row normal">
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">18:15 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-2 col-xs-4 airplane">
					<img src="assets/images/airplane_icon.png" alt="Flight duration"><br />16h 50m
				</div>
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">22:22 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-6 col-xs-12">
					LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | 
				</div>
				
				<div class="col-md-12 col-xs-12">
					<p class="horizontal_line_black"><span>2h 30m Stop overnight in Warsaw WAW</span></p>
				</div>
				
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">18:15 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-2 col-xs-4 airplane">
					<img src="assets/images/airplane_icon.png" alt="Flight duration"><br />16h 50m
				</div>
				<div class="col-md-2 col-xs-4">
					<span class="departure_time">22:22 - 12 Nov 2015</span><br>Bucharest OTP<br />terminal A
				</div>
				<div class="col-md-6 col-xs-12">
					LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | LOT Polish Airlines | arrives next day | 1 stop | 
				</div>
			</div>
		</div>
	</div>
</div>

    			
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







    			
