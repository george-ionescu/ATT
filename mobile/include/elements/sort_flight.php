<h1 class="pull-right">Sort Flights</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content padding_column_content full_height">
			        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
			        	<div class="row_form">
        		<div class="col-md-6 col-xs-6 short_padding pull-left">
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
				<div class="col-md-6 col-xs-6 short_padding pull-left">
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
				<div class="clearfix"></div>
			</div>
			
			<h1 class="pull-right second-title">Filter Flights</h1>
			
			<br />
			<div class="row_form">
				<div class="col-md-6 col-xs-6 short_padding pull-left">
					<div class="options_list">
						<span class="title">Stops</span>
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
					</div> 	
				</div>
				<?php if (1==2) { ?>
					<div class="col-md-6 col-xs-6 short_padding pull-left">	
						<div class="options_list">
							<span class="title">Ticket class</span>
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Economy</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label> 
						</div> 
					</div>
				<?php } ?>
				<div class="clearfix"></div>
			</div>		
			<div class="clearfix"></div>
			
			<?php include 'include/slider.php'; ?>
			
			
			<div class="row_form">
	        	<div class="col-md-12 col-xs-12 nopadding pull-left">
					<div class="options_list">
						<span class="title">Airports</span>
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
						<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
						<div class="text-complete">
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Economy</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
							<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label>
						</div>
						
						<a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
						<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a> 	 
						</div>
					</div>
					<div class="clearfix"></div>
					<br />
					<div class="col-md-12 col-xs-12 nopadding pull-left">
			        	<div class="options_list pull-left">
							<span class="title">Airlines</span>
							<label title="St. Wenceslas statue" class="radio-inline ellipsis"> <input type="checkbox" value="524777" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524777"><span class="check"></span> St. Wenceslas statue</label>
                            <label title="Stadion Evzena Rosickeho" class="radio-inline ellipsis"> <input type="checkbox" value="524757" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524757"><span class="check"></span> Stadion Evzena Rosickeho</label>
                            <label title="Stadion Pratelstvi" class="radio-inline ellipsis"> <input type="checkbox" value="524758" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524758"><span class="check"></span> Stadion Pratelstvi</label>
                            <label title="Stara kanalizacni cistirna Praha-Bubenec" class="radio-inline ellipsis"> <input type="checkbox" value="524789" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524789"><span class="check"></span> Stara kanalizacni cistirna Praha-Bubenec</label>
                            <div class="text-complete">
	                            <label title="Stefanikuv most" class="radio-inline ellipsis"> <input type="checkbox" value="524740" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524740"><span class="check"></span> Stefanikuv most</label>
	                            <label title="Strahovsky stadion" class="radio-inline ellipsis"> <input type="checkbox" value="524756" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524756"><span class="check"></span> Strahovsky stadion</label>
	                            <label title="Svata Marketa" class="radio-inline ellipsis"> <input type="checkbox" value="524677" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524677"><span class="check"></span> Svata Marketa</label>
	                            <label title="Trojsky Zamek" class="radio-inline ellipsis"> <input type="checkbox" value="524785" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524785"><span class="check"></span> Trojsky Zamek</label>
	                            <label title="Vysehrad" class="radio-inline ellipsis"> <input type="checkbox" value="524749" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524749"><span class="check"></span> Vysehrad</label>
	                            <label title="Zeleznicni most" class="radio-inline ellipsis"> <input type="checkbox" value="524736" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524736"><span class="check"></span> Zeleznicni most</label>
	                            <label title="Zoo Praha" class="radio-inline ellipsis"> <input type="checkbox" value="524784" name="filter[PointOfInterestsId][]" data-target="#HotelItemsList578818ff8ed0e389738db6ebc06f3bdf"  id="Poi524784"><span class="check"></span> Zoo Praha</label>
                            </div>
                            
                            <a class="more" href="#"><i class="ionicons ion-ios-plus-outline"></i>more</a>
							<a class="less" style="display: none;" href="#"><i class="ionicons ion-ios-minus-outline"></i>less</a> 	 
					</div>
				</div>
			</div>	
			<div class="clearfix"></div>
			        	
			        	<br /><br />
			        	<a href="#">clear all</a> selections
			        </form>
		        </div>
		        
		        
		        
        <script>     
			var breadcrump = [
				{
					title: 'Trip info',
					oldSlide: 'column1',
					newSlide: 'column1',
					class_bootstrap: 'col-md-3',
					url: 'include/pages/book_directly/flights.php'
				}
			];
			createBreadcrump(breadcrump);


			
               
	        function openNext(){
	    		var oldSlide = $('#column2');
	    		var newSlide = $('#column2');
	    		var url = 'include/elements/flight_result.php';
	    		var class_bootstrap = 'col-md-9 flight flight_detail nopadding';
	    		
	    		if (oldSlide && newSlide && url != '#'){
	    			changeSlide(oldSlide, newSlide, url, class_bootstrap);
	    		}
	    	}
	
	    	t = setTimeout(openNext, 400);

        </script>