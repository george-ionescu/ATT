<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3" id="column1">
				<h1 class="pull-right">Your Trip</h1>
		        <div class="clearfix"></div>
		        
		        <p>
		        <strong>Travellers and Accommodation</strong><br />
May 15, 2014 - May 21, 2014<br />
Marriott Potcoava, Calea Victoriei 21<br />
Expensive apartment with continental breakfast, 2 adults, 1 child<br />
Chip cubicle, 1 adult<br />
<br />
</p>
<p style="text-align: center;"><strong>Total price: 2332 euro</strong></p>
		    </div>
		    
		    <div class="col-md-6 flight_detail flight" id="column2">
		    	<h1 class="pull-right">Your Billing Information</h1>
		        <div class="clearfix"></div>
		        
		        <form class="form-horizontal custom_form" role="form" method="post" action="/">
					<div style="height:40px;">
						<label class="radio-inline"> Personal Invoice &nbsp;&nbsp;<input type="radio" id="invType1" name="inv" value="option1" checked><span class="check"></span> </label> 
						<label class="radio-inline"> Company Invoice &nbsp;&nbsp;<input type="radio" id="invType2" name="inv" value="option2"><span class="check"></span> </label> 
					</div>
					
					<div id="personal_invoice">
						<?php include 'ajax/pages/include/personal_invoice.php'; ?>
					</div>
					<div id="company_invoice" style="display:none;">
						<?php include 'ajax/pages/include/company_invoice.php'; ?>
					</div>
		        </form>
		        
		        <br />
		        <h1 class="pull-right">Payment Method</h1>
		        <div class="clearfix"></div>
		        
		        <br />
		        <form class="form-horizontal custom_form" role="form" method="post" action="/">
		        	<div class="row_form">
						<div class="col-md-4">
							<label class="radio-inline"> Online Payment &nbsp;&nbsp;<input type="radio" id="payType1" name="pay" value="option1" checked><span class="check"></span> </label> 
							<div class="clearfix"></div>
							<br />
							<p>Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
						<div class="col-md-4">
							<label class="radio-inline"> Bank Transfer &nbsp;&nbsp;<input type="radio" id="payType2" name="pay" value="option2"><span class="check"></span> </label> 
							<div class="clearfix"></div>
							<br />
							<p>Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
						<div class="col-md-4">
							<label class="radio-inline"> Cash Payment &nbsp;&nbsp;<input type="radio" id="payType2" name="pay" value="option2"><span class="check"></span> </label> 
							<div class="clearfix"></div>
							<br />
							<p>Reprimique scripserit sea no. Et mea alii fastidii, usu et error debitis repudiare. Ut his vide appellantur, dicat nonumes eligendi an nec. Nulla nemore </p>
						</div>
					
					</div>
		        </form>
		        <div class="clearfix"></div>
		        
		        <br />
		        <h1 class="pull-right">Complete your Booking</h1>
		        <div class="clearfix"></div>
		        
		        <br />
    			<p>Fusce posuere sollicitudin justo. Curabitur pulvinar neque quis ligula convallis, vitae vulputate erat lacinia. Quisque auctor augue accumsan, egestas ligula vitae, venenatis diam. Proin est urna, feugiat ac congue ut, luctus eu ligula. Nullam elit velit, fringilla ut nisi eget, sagittis convallis orci. Duis luctus libero nisi, ut sagittis tortor porta at. Proin ipsum erat, laoreet a auctor ac, porta quis elit... <a href="#"><i class="fa fa-plus-circle"></i>more</a></p>
		        
		        <div class="clearfix"></div>
		        <br />
    			<div style="text-align: center">
    				<button type="button" class="btn btn-default">book this trip</button>
    			</div>
    			<br /><br />
		    </div>
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>

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
</script>