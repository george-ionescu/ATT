<h1 class="pull-right">Trip Results</h1>
<div class="clearfix"></div>

<div class="column_content padding_column_content full_height">
    <div class="custom_form">
    	<div class="options_list"><span class="title">July 2014</span></div>
	    <table id="availability_table" class="flight_detail_table availab">
	    	<tr style="background-color:#38393d; color:#fff;">
	    		<td>offer</td>
	    		<td>price</td>
	    		<td>start date</td>
	    		<td></td>
	    		<td>transport</td>
	    	</tr>
	    	<tr class="border" style="border-bottom: 5px solid #38393d;">
	    		<td>WOW SANTORINI - REDUCERE 199 euro</td>
	    		<td>from <strong>1.999,82 EUR</strong></td>
	    		<td>29 Feb</td>
	    		<td>7 nights</td>
	    		<td>11:55 <strong>Bucharest</strong> <em>AEGEAN AIRLINES</em></td>
	    	</tr>
	    </table>
    </div>
    <div class="custom_form">
    	<div class="options_list"><span class="title">August 2014</span></div>
	    <table id="availability_table" class="flight_detail_table availab">
	    	<tr style="background-color:#38393d; color:#fff;">
	    		<td>offer</td>
	    		<td>price</td>
	    		<td>month</td>
	    		<td></td>
	    		<td>departure</td>
	    	</tr>
	    	<tr class="border" style="border-bottom: 5px solid #38393d;">
	    		<td>WOW SANTORINI - REDUCERE 199 euro</td>
	    		<td>from <strong>1.999,82 EUR</strong></td>
	    		<td>29 Feb</td>
	    		<td>7 nights</td>
	    		<td>11:55 <strong>Bucharest</strong> <em>AEGEAN AIRLINES</em></td>
	    	</tr>
	    	<tr class="border" style="border-bottom: 5px solid #38393d;">
	    		<td>WOW SANTORINI - REDUCERE 199 euro</td>
	    		<td>from <strong>1.999,82 EUR</strong></td>
	    		<td>29 Feb</td>
	    		<td>7 nights</td>
	    		<td>11:55 <strong>Bucharest</strong> <em>AEGEAN AIRLINES</em></td>
	    	</tr>
	    </table>
    </div>
</div>


<script>
	$(function(){

		$('#availability_table tr.border').click(function(event){
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



