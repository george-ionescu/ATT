<h1 class="pull-right">Trip Information</h1>
        <div class="clearfix"></div>
        
        <div class="column_content padding_column_content full_height">
	        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
				<div class="row_form">
					<br /><br />
					<div class="col-md-6 col-xs-6 short_padding" style="padding-left: 0;">
						<p class="flight_title first">from</p>
						<span class="custom-dropdown">
						    <select>
						    	<?php 
						    		for ($x=1; $x<13; $x++){
						    			if ($x == date("n")){
						    				print '<option value="'.$x.'" selected="selected">' . date('F', mktime(0,0,0,$x)) . " " . date("Y");
						    			} else {
						    				print '<option value="'.$x.'">' . date('F', mktime(0,0,0,$x)) . " " . date("Y");
						    			}
						    		}
						    	?>
						    </select>
						</span>
					</div>
					<div class="col-md-6 col-xs-6 short_padding">
						<p class="flight_title first">to</p>
						<span class="custom-dropdown">
						    <select>
						    	<?php 
						    		for ($x=1; $x<13; $x++){
						    			if ($x == date("n")){
						    				print '<option value="'.$x.'" selected="selected">' . date('F', mktime(0,0,0,$x)) . " " . date("Y");
						    			} else {
						    				print '<option value="'.$x.'">' . date('F', mktime(0,0,0,$x)) . " " . date("Y");
						    			}
						    		}
						    	?>
						    </select>
						</span>					
					</div>
				</div>
				<div class="clearfix"></div>
				
				
				
				<div id="add_on_trip" style="margin-top:10px;">
					<div class="form-group">
						
						
						<div class="row_form margin_top_block">
							<div class="custom_input_slide small">
								<p class="box_title pull-left">rooms</p>
								
								<div class="custom_input_slide_content rooms small pull-right room">
									<a href="#" class="counterDown arrow_left pull-left"><i class="fa fa-caret-left"></i></a>
									<div class="pull-left">
										<span class="custom-dropdown small">
										    <select id="counterRoom">
										        <option value="1">01</option>
										        <option value="2">02</option>
										        <option value="3">03</option>
										        <option value="4">04</option>
										        <option value="5">05</option>
										        <option value="6">06</option>
										    </select>
										</span>
									</div>
									<a href="#" class="counterUp arrow_right pull-left"><i class="fa fa-caret-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						
						
						<?php include $_SERVER['DOCUMENT_ROOT'] . '/include/elements/rooms.php'; ?>
						
						<div class="clearfix"></div>
					</div>
				</div>
		
				<div id="submit_block">
		        	<br /><br />
		        	<button id="submit_button" type="submit" class="btn btn-default">proceed</button>
		        	<br /><br />
		        	<a href="#">clear all</a> selections
	        	</div>
	        </form>
        </div>    
		        
		        
        <script>
        
            <?php if ($_GET['gonext'] == 1) { ?>
		        function openNext(){
		    		var oldSlide = $('#column2');
		    		var newSlide = $('#column2');
		    		var url = 'include/elements/top_result.php';
		    		var class_bootstrap = 'col-md-9 nopadding noborder';
		    		
		    		if (oldSlide && newSlide && url != '#'){
		    			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		    		}
		    	}
		    	
		        
		        t = setTimeout(openNext, 400);
	        <?php } ?>
	        
	        $(function(){
	        	$('.less').hide();
	        	$('.more').click(function(event){
	        		event.preventDefault();
	        		event.stopPropagation();
	        		
	        		$(this).hide();
	        		$(this).parent().find('.less').show();
	        		$(this).parent().find('.text-complete').show();
	        		updateAllScrolls(); 
	        	});
	        	$('.less').click(function(event){
	        		event.preventDefault();
	        		event.stopPropagation();
	        		
	        		$(this).hide();
	        		$(this).parent().find('.more').show();
	        		$(this).parent().find('.text-complete').hide();
	        		updateAllScrolls(); 
	        	});

	        	$('#submit_button').click(function(event){
	        		event.preventDefault();

	        		var oldSlide = $('#column1');
	        		var newSlide = $('#column1');
	        		var url = 'include/elements/sort_top.php?gonext=1';
	        		var class_bootstrap = 'col-md-3 nopadding';
	        		
	        		if (oldSlide && newSlide && url != '#'){
	        			closeAllSlidesAndOpen2(oldSlide, newSlide, url, class_bootstrap);
	        		}
	        	});
		    });
        </script>