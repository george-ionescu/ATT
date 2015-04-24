<h1 class="pull-right">Passanger Association</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<form class="form-horizontal custom_form" role="form" method="post" action="">
		
		<p class="flight_title first">New York Gala Dinner Restaurant</p>
		<p style="margin-bottom: 0; margin-top:10px;">1st room</p>
		<label class="radio-inline passanger passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Ionescu Geprge</label>
		<div class="clearfix"></div>
		<label class="radio-inline passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Popescu Stefan</label>
		<div class="clearfix"></div>
		<p style="margin-bottom: 0; margin-top:10px;">2nd room</p>
		<label class="radio-inline passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Ionescu Geprge</label>
		<div class="clearfix"></div>
		<label class="radio-inline passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Popescu Stefan</label>
		<div class="clearfix"></div>
		<br />
		<p class="flight_title first">New York Gala Dinner Restaurant</p>
		<p style="margin-bottom: 0; margin-top:10px;">1st room</p>
		<label class="radio-inline passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Ionescu Geprge</label>
		<div class="clearfix"></div>
		<label class="radio-inline passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Popescu Stefan</label>
		<div class="clearfix"></div>
		<p style="margin-bottom: 0; margin-top:10px;">2nd room</p>
		<label class="radio-inline passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Ionescu Geprge</label>
		<div class="clearfix"></div>
		<label class="radio-inline passanger"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Mr. Popescu Stefan</label>
		<div class="clearfix"></div>
		<br />
	</form>
	
	<br />
	<div class="clearfix"></div>
	<button id="submit_button_99" type="button" class="btn btn-default proceed_button">proceed</button>
</div>


<script>
	$(function(){
		$('#submit_button_99').click(function(event){
			event.preventDefault();

			$(this).html('please wait');

			var oldSlide = $('#column2');
			var newSlide = $('#column2');
			var url = 'include/elements/billing.php';
			var class_bootstrap = 'col-md-9';
			
			if (oldSlide && newSlide && url != '#'){
				changeSlide(oldSlide, newSlide, url, class_bootstrap);
    			updateAllScrolls();
			}
		});
	});
</script>