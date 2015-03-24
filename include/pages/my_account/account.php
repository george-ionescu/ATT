<div class="column_content padding_column_content full_height no_margin_scroll"> 
    	
		<div style="position:relative;">
			<h1 class="pull-right"><a class="hide_on_desktop close_button_mobile" href="my_account.php"></a> Account Settings</h1>
		</div>
		<div class="clearfix"></div>
    	 
    	<div style="display:block; position:relative;">
    		<a id="editForm" href="#" class="btn btn-default"><i class="fa fa-pencil-square-o"></i>edit</a>
    		<div id="saveFormWrapper" style="display:none;">
    			<a id="saveForm" href="#" class="btn btn-default"><i class="fa fa-pencil-square-o"></i>save</a>
    			<a id="closeForm" href="#" class="btn btn-default"><i class="ionicons ion-ios-close-outline"></i>cancel</a>
    		</div>
    	</div>
    	<br />
       
       <script>

			$(function(){
				$("#accountForm :input").attr("disabled", true);
				$("#accountForm label.input_label").addClass("label_disabled");
			});

			$('#editForm').click(function(e){
				e.preventDefault();

				$('#editForm').hide();
				$('#saveFormWrapper').show();

				$("#accountForm :input").attr("disabled", false);
				$("#accountForm label.input_label").removeClass("label_disabled");
				
			});
			$('#saveForm').click(function(e){
				e.preventDefault();

				$('#editForm').show();
				$('#saveFormWrapper').hide();

				$("#accountForm :input").attr("disabled", true);
				$("#accountForm label.input_label").addClass("label_disabled");
			});
			$('#closeForm').click(function(e){
				e.preventDefault();

				$('#editForm').show();
				$('#saveFormWrapper').hide();

				$("#accountForm :input").attr("disabled", true);
				$("#accountForm label.input_label").addClass("label_disabled");
			});

       </script>
        
        <form id="accountForm" class="form-horizontal custom_form" role="form" method="post" action="/">
        	<div class="row_form">
        		<div class="col-md-3 col-xs-6 short_padding2">
        			<div class="form-group">
        				<label style="font-size: 18px;">Display name</label>
        				<input type="text" class="form-control italic" id="inputSuccess3" placeholder="" value="Gabriel">
        			</div> 
        		</div>
        	</div>
        	<div class="row_form">
        		<div class="col-md-3 col-xs-4 short_padding2">
        			<div class="form-group">
        				<label style="font-size: 18px;">Current password</label>
        				<input type="text" class="form-control italic" id="inputSuccess3" placeholder="" value="Gabriel">
        			</div> 
        		</div>
        		<div class="col-md-3 col-xs-4 short_padding2">
        			<div class="form-group">
        				<label style="font-size: 18px;">New password</label>
        				<input type="text" class="form-control italic" id="inputSuccess3" placeholder="" value="Gabriel">
        			</div> 
        		</div>
        		<div class="col-md-3 col-xs-4 short_padding2">
        			<div class="form-group">
        				<label style="font-size: 18px;">Reenter Password</label>
        				<input type="text" class="form-control italic" id="inputSuccess3" placeholder="" value="Gabriel">
        			</div> 
        		</div>
        	</div>
        
        
        <div class="clearfix"></div>
        <p class="account_title" style="margin-bottom:0;">Personal info</p>
			<div class="row_form">
				<div class="col-md-2 col-xs-4 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>
				</div>
				<div class="col-md-3 col-xs-8 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="First name"> 
				</div>
				<div class="col-md-3 col-xs-4 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="Last name"> 
				</div>
				<div class="col-md-4 col-xs-8 short_padding2">
					<label class="control-label input_label col-sm-6 col-xs-6" for="inputSuccess3">&nbsp;&nbsp;&nbsp;Birth Date</label>
					<div class="col-sm-6 col-xs-6 no_padding_left_right">
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>year</option>
							        <option>2014</option>  
							        <option>2015</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>mm</option>
							        <option>yan</option>  
							        <option>fab</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>day</option>
							        <option>1</option>  
							        <option>2</option>
							    </select>
							</span>
						</div>
					</div>
				</div>
				
				<div class="col-md-2 col-xs-4 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>
				</div>
				<div class="col-md-3 col-xs-8 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="First name"> 
				</div>
				<div class="col-md-3 col-xs-4 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>						
				</div>
				<div class="col-md-4 col-xs-8 short_padding2">
					<label class="control-label input_label col-sm-6 col-xs-6" for="inputSuccess3">&nbsp;&nbsp;&nbsp;Birth Date</label>
					<div class="col-sm-6 col-xs-6 no_padding_left_right">
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>year</option>
							        <option>2014</option>  
							        <option>2015</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>mm</option>
							        <option>yan</option>  
							        <option>fab</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>day</option>
							        <option>1</option>  
							        <option>2</option>
							    </select>
							</span>
						</div>
					</div>
				</div>
				
				<div class="col-md-5 col-xs-6 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>
				</div>
				<div class="col-md-5 col-xs-6 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>					
				</div>
				<div class="col-md-2 col-xs-6 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="Flyer Card Number"> 
				</div>
				
				<div class="col-md-5 col-xs-6 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="Phone *"> 
				</div>
				<div class="col-md-4 col-xs-12 short_padding2">
					<p class="italic" style="color:#fff;padding-top:7px;">* Only for emergencies</p>
				</div>
			</div>
		        
		      
		      
		      
		      
		      
		      
		      
		       <div class="clearfix"></div>
        	<p class="account_title" style="margin-bottom:0; margin-top:20px;">Billing info</p>
		      <div style="height:40px;">
						<label class="radio-inline"> Personal Invoice &nbsp;&nbsp;<input type="radio" id="invType1" name="inv" value="option1" checked><span class="check"></span> </label> 
						<label class="radio-inline"> Company Invoice &nbsp;&nbsp;<input type="radio" id="invType2" name="inv" value="option2"><span class="check"></span> </label> 
					</div>
					
					<div id="personal_invoice">
						<?php include 'include/personal_invoice.php'; ?>
					</div>
					<div id="company_invoice" style="display:none;">
						<?php include 'include/company_invoice.php'; ?>
					</div>
		      	<div class="clearfix"></div>
		        
		        
		        <br /><br />
		        <button type="button" class="btn btn-default">add traveller info</button>
		        
		        
		        
		        
		        <div class="clearfix"></div>
        <p class="flight_title">1st traveller | &nbsp;<a href="#"><i class="ionicons ion-ios-close-outline"></i>remove</a> </p>
			<div class="row_form">
				<div class="col-md-2 col-xs-4 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>
				</div>
				<div class="col-md-3 col-xs-8 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="First name"> 
				</div>
				<div class="col-md-3 col-xs-4 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="Last name"> 
				</div>
				<div class="col-md-4 col-xs-8 short_padding2">
					<label class="control-label input_label col-sm-6 col-xs-6" for="inputSuccess3">&nbsp;&nbsp;&nbsp;Birth Date</label>
					<div class="col-sm-6 col-xs-6 no_padding_left_right">
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>year</option>
							        <option>2014</option>  
							        <option>2015</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>mm</option>
							        <option>yan</option>  
							        <option>fab</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>day</option>
							        <option>1</option>  
							        <option>2</option>
							    </select>
							</span>
						</div>
					</div>
				</div>
				
				<div class="col-md-2 col-xs-4 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>
				</div>
				<div class="col-md-3 col-xs-8 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="First name"> 
				</div>
				<div class="col-md-3 col-xs-4 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>						
				</div>
				<div class="col-md-4 col-xs-8 short_padding2">
					<label class="control-label input_label col-sm-6 col-xs-6" for="inputSuccess3">&nbsp;&nbsp;&nbsp;Birth Date</label>
					<div class="col-sm-6 col-xs-6 no_padding_left_right">
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>year</option>
							        <option>2014</option>  
							        <option>2015</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right custom_date_border">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>mm</option>
							        <option>yan</option>  
							        <option>fab</option>
							    </select>
							</span>
						</div>
						<div class="col-sm-4 col-xs-4 no_padding_left_right">
							<span class="custom-dropdown triple_date">
							    <select>
							        <option>day</option>
							        <option>1</option>  
							        <option>2</option>
							    </select>
							</span>
						</div>
					</div>
				</div>
				
				<div class="col-md-5 col-xs-6 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>
				</div>
				<div class="col-md-5 col-xs-6 short_padding2">
					<span class="custom-dropdown">
					    <select>
					        <option>Option 1</option>
					        <option>Option 2</option>  
					        <option>Option 3</option>
					        <option>Option 4</option>
					        <option>Option 5</option>
					    </select>
					</span>					
				</div>
				<div class="col-md-2 col-xs-6 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="Flyer Card Number"> 
				</div>
				<div class="col-md-5 col-xs-6 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="E-mail"> 
				</div>
				<div class="col-md-3 col-xs-6 short_padding2">
					<input type="text" class="form-control italic" id="inputSuccess3" placeholder="Phone *"> 
				</div>
				<div class="col-md-4 col-xs-6 short_padding2"></div>
			</div>
		        
		        
		        
		        
		        
		        
		        <div class="clearfix"></div>
    			<br /><br />
		</form>
</div>		
		
		
		
<script>
	function closePage(){
		url = 'include/pages/book_directly/flights.php';
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

	$(function(){
		$('#invType1').click(function(){
			$('#personal_invoice').show();
			$('#company_invoice').hide();
		});
		$('#invType2').click(function(){
			$('#personal_invoice').hide();
			$('#company_invoice').show();
		});

		for (i=1; i<=4; i++){
			$("#calendar"+i).datepicker({
		 	    dateFormat: 'dd/mm/yy',
			 	changeMonth: true,
			    changeYear: true,
		    });
		}
	});
</script>