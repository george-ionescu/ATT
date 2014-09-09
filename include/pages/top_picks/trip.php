<h1 class="pull-right">Trip Details</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
	<div style="text-align: center;margin-top:10px;"><img class="img-responsive" src="images/paris_big.png" alt="" /></div>
	<br />
	
	<h1 class="pull-left" style="color:#000; font-size:30px; margin-bottom:10px;">Great time in Paris</h1>

	
	<a href="javascript:toggleAvailability();" class="search_options availab pull-right"><i class="fa fa-plus-circle"></i>check availability</a>
	
	<table id="availability_table" class="flight_detail_table recap availab" style="display:none;">
    				<tr>
    					<td colspan="4" class="title">July 2014</td>
    				</tr>
    				<tr class="border">
    					<td>29 Iu</td>
    					<td>7 nights</td>
    					<td>11:55 <strong>Bucharest</strong><br /><em>AEGEAN AIRLINES</em></td>
    					<td>WOW SANTORINI - REDUCERE 199 euro<br/>camera plecari / luna iulie</td>
    					<td>from <br /> <strong>1.999,82</strong> EUR</td>
    				</tr>
    				<tr class="border">
    					<td>29 Iu</td>
    					<td>7 nights</td>
    					<td>11:55 <strong>Bucharest</strong><br /><em>AEGEAN AIRLINES</em></td>
    					<td>WOW SANTORINI - REDUCERE 199 euro<br/>camera plecari / luna iulie</td>
    					<td>from <br /> <strong>1.999,82</strong> EUR</td>
    				</tr>
    				
    				<tr>
    					<td colspan="4" class="title">August 2014</td>
    				</tr>
    				<tr class="border">
    					<td>29 Iu</td>
    					<td>7 nights</td>
    					<td>11:55 <strong>Bucharest</strong><br /><em>AEGEAN AIRLINES</em></td>
    					<td>WOW SANTORINI - REDUCERE 199 euro<br/>camera plecari / luna iulie</td>
    					<td>from <br /> <strong>1.999,82</strong> EUR</td>
    				</tr>
    				<tr class="border">
    					<td>29 Iu</td>
    					<td>7 nights</td>
    					<td>11:55 <strong>Bucharest</strong><br /><em>AEGEAN AIRLINES</em></td>
    					<td>WOW SANTORINI - REDUCERE 199 euro<br/>camera plecari / luna iulie</td>
    					<td>from <br /> <strong>1.999,82</strong> EUR</td>
    				</tr>
    			</table>
	
	<div class="clearfix"></div>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting
		industry. Lorem Ipsum has been the industry's standard dummy text ever
		since the 1500s, when an unknown printer took a galley of type and
		scrambled it to make a type specimen book. It has survived not only
		five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with
		the release of Letraset sheets containing Lorem Ipsum passages, and
		more recently with desktop publishing software like Aldus PageMaker
		including versions of Lorem Ipsum.</p>
</div>

<script>
	function toggleAvailability(){
		$('#availability_table').toggle();
		if (!$('#availability_table').is(':visible')){
			$('.search_options .fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');
			$('.search_options').removeClass('active');
		} else {
			$('.search_options .fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
			$('.search_options').addClass('active');
		}
		
		updateAllScrolls();
	}

	$(function(){
		$('#availability_table tr').click(function(event){
			event.preventDefault();

			var oldSlide = $('#column1');
			var newSlide = $('#column1');
			var url = 'include/elements/hotel_result.php?type=5';
    		var class_bootstrap = 'col-md-3 hotel nopadding';
			
			if (oldSlide && newSlide && url != '#'){
				closeAllSlidesAndOpen2(oldSlide, newSlide, url, class_bootstrap);
			}
		});
	});
</script>
		