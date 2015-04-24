<h1 class="pull-right">Sign in <span style="font-size:14px;"> for fast reservation processing</span></h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height"> 
 
 
 <form class="form-horizontal custom_form" role="form" method="post" action="/">
			<div style="height:40px;">
				<label class="radio-inline"> Personal Invoice &nbsp;&nbsp;<input type="radio" id="invType1" name="inv" value="option1" checked><span class="check"></span> </label> 
				<label class="radio-inline"> Company Invoice &nbsp;&nbsp;<input type="radio" id="invType2" name="inv" value="option2"><span class="check"></span> </label> 
			</div>
			
			<div id="personal_invoice">
				<?php include '../pages/include/personal_invoice.php'; ?>
			</div>
			<div id="company_invoice" style="display:none;">
				<?php include '../pages/include/company_invoice.php'; ?>
					</div>
		        </form>
		        
		        <br />
		        <h1 class="pull-right" style="margin-right: 0;">Payment Method</h1>
		        <div class="clearfix"></div>
		        
		        <form class="form-horizontal custom_form" role="form" method="post" action="/">
		        	<div class="row_form">
						<div class="col-md-4">
							<label class="radio-inline"> Online Payment &nbsp;&nbsp;<input type="radio" id="payType1" name="pay" value="option1" checked><span class="check"></span> </label> 
							<div class="clearfix"></div>
							<p class="nopadding">Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
						<div class="col-md-4">
							<label class="radio-inline"> Bank Transfer &nbsp;&nbsp;<input type="radio" id="payType2" name="pay" value="option2"><span class="check"></span> </label> 
							<div class="clearfix"></div>
							<p class="nopadding">Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
						<div class="col-md-4">
							<label class="radio-inline"> Cash Payment &nbsp;&nbsp;<input type="radio" id="payType2" name="pay" value="option2"><span class="check"></span> </label> 
							<div class="clearfix"></div>
							<p class="nopadding">Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
					
					</div>
		        </form>
		        <div class="clearfix"></div>
		        
		        <br />
		        <h1 class="pull-right" style="margin-right: 0;">Complete your Booking</h1>
		        <div class="clearfix"></div>
		        
				<article>
	    			<p>Terms and conditions. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia. Quisque auctor augue accumsan, egestas ligula vitae, venenatis diam. Proin est urna, feugiat ac congue ut, luctus eu ligula. Nullam elit velit, fringilla ut nisi eget, sagittis convallis orci. Duis luctus libero nisi, ut sagittis tortor porta at. Proin ipsum erat, laoreet a auctor ac, porta quis elit... </p>
    			</article>		        
        
        
        <div class="clearfix"></div>
			        <br />
	    			<div style="text-align: center">
	    				<button id="foo" type="button" class="btn btn-default">proceed</button>
	    			</div>
	    		</div>
	    		
	    		
	    		
	    		<script>
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
	    			var url = 'ajax/new/finish.php';
	    			var class_bootstrap = 'col-md-3';
	    			
	    			if (oldSlide && newSlide && url != '#'){
	    				closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
	    			}
	    		});
	    		</script>