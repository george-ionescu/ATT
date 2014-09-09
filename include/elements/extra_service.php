<h1 class="pull-right">Extra Service</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form class="form-horizontal custom_form" role="form" method="post" action="page1_2_2.php">
		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Option 1</label> 
		<div class="row_form">
			<div class="col-md-8 short_padding">
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
			<div class="col-md-4 short_padding">
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
		</div>
		
		<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Option 1</label> 
		<div class="row_form">
			<div class="col-md-8 short_padding">
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
			<div class="col-md-4 short_padding">
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
		</div>
	</form>
	
	<br />
	<div class="clearfix"></div>
	<button id="submit_button" type="submit" class="btn btn-default proceed_button">proceed</button>
</div>


<script>
	$(function(){
		$('#submit_button').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column1');
			var newSlide = $('#column1');
			var url = 'include/elements/trip_info.php?page=signin';
			var class_bootstrap = 'col-md-3';
			
			if (oldSlide && newSlide && url != '#'){
				closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>