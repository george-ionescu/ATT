<h1 class="pull-right">Your Billing Information</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height"> 
 
 
 <form class="form-horizontal custom_form" role="form" method="post" action="/">
			<div style="height:40px;">
				<label class="radio-inline"><input type="radio" id="invType1" name="inv" value="option1" checked><span class="check"></span>  Personal Invoice</label> 
				<label class="radio-inline"><input type="radio" id="invType2" name="inv" value="option2"><span class="check"></span> Company Invoice </label> 
			</div>
			
			<div id="personal_invoice">
				<?php include 'include/personal_invoice.php'; ?>
			</div>
			<div id="company_invoice" style="display:none;">
				<?php include 'include/company_invoice.php'; ?>
					</div>
		        </form>
		        
		        <br />
		        <h1 class="pull-right" style="margin-right: 0;">Payment Method</h1>
		        <div class="clearfix"></div>
		        
		        <form class="form-horizontal custom_form" role="form" method="post" action="/">
		        	<div class="row_form">
						<div class="col-md-4 col-xs-12">
							<label class="radio-inline"><input type="radio" id="payType1" name="pay" value="option1" checked><span class="check"></span> Online Payment </label> 
							<div class="clearfix"></div>
							<p class="nopadding white_on_mobile">Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
						<div class="col-md-4 col-xs-12">
							<label class="radio-inline"><input type="radio" id="payType2" name="pay" value="option2" checked><span class="check"></span> Bank Transfer </label> 
							<div class="clearfix"></div>
							<p class="nopadding white_on_mobile">Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
						<div class="col-md-4 col-xs-12">
							<label class="radio-inline"><input type="radio" id="payType3" name="pay" value="option3" checked><span class="check"></span> Cash Payment </label> 
							<div class="clearfix"></div>
							<p class="nopadding white_on_mobile">Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
					
					</div>
		        </form>
		        <div class="clearfix"></div>
		        
		        <br />
		        <h1 class="pull-right" style="margin-right: 0;">Complete your Booking</h1>
		        <div class="clearfix"></div>
		        
				<p id="option1" class="white_on_mobile">
					Terms and conditions. Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia 
					<span class="text-complete">
						Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia
					</span> 
					<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
					<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a>
				</p>      
        
        
        <div class="clearfix"></div>
			        <br />
	    			<div style="text-align: center">
	    				<button id="foo" type="button" class="btn btn-default">proceed</button>
	    			</div>
	    		</div>
	    		
	    		
	    		
	    		<script>
	    						var breadcrump = [
	    		    				{
	    		    					title: 'Trip info',
	    		    					oldSlide: 'column1',
	    		    					newSlide: 'column1',
	    		    					class_bootstrap: 'col-md-3',
	    		    					url: 'include/pages/book_directly/flights.php'
	    		    				},
	    		    				{
	    		    					title: 'Change Flight',
	    		    					oldSlide: 'column1',
	    		    					newSlide: 'column1',
	    		    					class_bootstrap: 'col-md-3',
	    		    					url: 'include/elements/sort_flight.php'
	    		    				},
	    		    				{
	    		    					title: 'Change Traveller Info',
	    		    					oldSlide: 'column1',
	    		    					newSlide: 'column1',
	    		    					class_bootstrap: 'col-md-3',
	    		    					url: 'include/elements/trip_info.php?page=signin'
	    		    				}
	    		    			];
	    		    			createBreadcrump(breadcrump);



	    		
	    		$(function(){
	    			$('#invType1').click(function(){
	    				$('#personal_invoice').show();
	    				$('#company_invoice').hide();
	    			});
	    			$('#invType2').click(function(){
	    				$('#personal_invoice').hide();
	    				$('#company_invoice').show();
	    			});
	    		});
	    		
	    		$('#foo').click(function(event){
	    			event.preventDefault();
	    		
	    			var oldSlide = $('#column1');
	    			var newSlide = $('#column1');
	    			var url = 'include/elements/thank_you.php';
	    			var class_bootstrap = 'col-md-3';
	    			
	    			if (oldSlide && newSlide && url != '#'){
	    				closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
	    			}
	    		});
	    		</script>