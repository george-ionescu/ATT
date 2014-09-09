<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1x">
				<h1 class="pull-right">Sort flights</h1>
		        <div class="clearfix"></div>
		        
		        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
		        	<div>
						<div class="selectParent pull-left">
							<select class="form-control">
								<option value="1">option 1</option>
								<option value="2">option 2</option>
							</select>
						</div>
						<div class="selectParent pull-left">
							<select class="form-control">
								<option value="1">option 1</option>
								<option value="2">option 2</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<br />
					<div class="options_list pull-left">
						<span class="title">Stops</span>
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> Direct flight</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox2" name="gr1" value="option2"><span class="check"></span> 1 stop</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox3" name="gr1" value="option3"><span class="check"></span> 2 stops</label> 
					</div> 		
					<div class="options_list pull-left">
						<span class="title">Ticket class</span>
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox1" name="gr2" value="option1" checked><span class="check"></span> Economy</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox2" name="gr2" value="option2"><span class="check"></span> Business</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox3" name="gr2" value="option3"><span class="check"></span> First class</label> 
					</div> 		
		        	<div class="clearfix"></div>
		        	
		        	<br />
					<p id="amount"></p>
					<div id="slider-range"></div>
					<br />
		        	
		        	<div class="options_list pull-left">
						<span class="title">Airlines</span>
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox1" name="gr3" value="option1" checked><span class="check"></span> Air Canada</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox2" name="gr3" value="option2"><span class="check"></span> Air America</label> 
						<label class="radio-inline"> <input type="radio" id="inlineCheckbox3" name="gr3" value="option3"><span class="check"></span> Tarom</label> 
					</div>
					<div class="clearfix"></div>
		        
		        	<button id="submit_button" type="submit" class="btn btn-default">apply filters</button>
		        	<br /><br />
		        	<a href="#">clear all</a> selections
		        </form>
		        
		    </div>
		    
		    <div class="col-md-9" id="column2x">
		    	<h1 class="pull-right">300 results from Bucharest to Antigua</h1>
		        <div class="clearfix"></div>
		    </div>
		</div>
	</div>
</content>


<?php include '../include/footer.php'; ?>