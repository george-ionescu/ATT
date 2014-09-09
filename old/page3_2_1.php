<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 hotel nopadding" id="column1">
				<h1 class="pull-right">Filter Weekend</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
		        	<ul class="menu_column hotel">
						<li class="active"><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-minus-circle"></i>view</a></li>		
						<li><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-plus-circle"></i>view</a></li>	
						<li><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-plus-circle"></i>view</a></li>	
						<li><a href="#"><span class="big">28</span> Nov <span class="big_line"> - </span> <span class="big">1</span> Dec</a> <a href="#" class="view_but pull-right"><i class="fa fa-plus-circle"></i>view</a></li>		        
					</ul>
					
					<h1 class="pull-right">Sort Hotels</h1>
		        	<div class="clearfix"></div>
		        	<div class="padding_column_content">
				        <form id="flights_form" class="form-horizontal custom_form" role="form" method="post" action="/">
				        	<?php include 'ajax/elements/sort_hotel.php'; ?>
				        	
				        	<button id="submit_button" type="submit" class="btn btn-default">apply filters</button>
				        	<br /><br />
				        	<a href="#">clear all</a> selections
				        </form>
				    </div>
		        </div>
		    </div>
		    
		    <div class="col-md-3 hotel nopadding" id="column2">
		    	<h1 class="pull-right">999 hotel results</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
			        <?php include 'ajax/elements/hotels_compare_list.php'; ?>
			    </div>
		    </div>
		    
		    <div class="col-md-3 nopadding noborder" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		    
		    <div class="col-md-6 nopadding" id="column3x">
		    	<div id="compare_content">
		    		<div class="box pull-left">
			    		<p>05 dec - 08 dec</p>
			    		<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="box pull-left">
			    		<p>05 dec - 08 dec</p>
			    		<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="box pull-left">
			    		<p>05 dec - 08 dec</p>
			    		<p class="price_p">
							<span class="price">254</span> euro/package <br /> with flight included
						</p>
						<a href="#">room details</a>
					</div>
					<div class="clearfix"></div>
		    	</div>
		    	<div id="flight_content">
		    		<h1 class="pull-right">Preselected flight Bucharest to Antigua</h1>
		    		<div class="clearfix"></div>
		    		<p class="pull-right">You can change your flight later</p>
		        	<div class="clearfix"></div>
		        	
		    		<?php include 'ajax/elements/flight_recap_short.php'; ?>
		    		
		    		<div class="pull-right">
						<a href="javascript:closeSlideById('column3x');"><i class="fa fa-times-circle-o"></i>close</a>
					</div>
					<div class="clearfix"></div>
		    	</div>
		    </div>
		    <div class="col-md-6 nopadding full_height" id="column3gmap">
		    	<div id="google-map" class="map"></div>
		    </div>
		</div>
	</div>
</content>

<?php include '../include/footer.php'; ?>