<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 full_height assisted search nopadding" id="column1">
		        
		        <div class="column_content padding_content full_height container-fluid" style="padding-top:0px;">
			        <form class="form-horizontal custom_form" role="form" method="post" action="">
						
						<h1 class="pull-right second-title">Filter Items</h1>
						<br />
						<div class="row_form">
							<div class="col-md-12 col-xs-12 short_padding pull-left">
								<div class="options_list">
									<span class="title">2015</span>
									<?php for ($i=6; $i<=12; $i++) { ?>
										<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> <?php echo date("F", mktime(0, 0, 0, $i, 1, 2015)); ?></label>
									<?php } ?> 
								</div> 	
							</div>
							<div class="col-md-12 col-xs-12 short_padding pull-left">
								<div class="options_list">
									<span class="title">2016</span>
									<?php for ($i=1; $i<=5; $i++) { ?>
										<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> <?php echo date("F", mktime(0, 0, 0, $i, 1, 2015)); ?></label>
									<?php } ?> 
								</div> 	
							</div>
							<div class="clearfix"></div>
						</div>	
						<div class="clearfix"></div>
						
						<div class="row_form">
							<div class="col-md-12 col-xs-12 short_padding pull-left">
								<div class="options_list">
									<span class="title">2016</span>
									<?php for ($i=1; $i<=5; $i++) { ?>
										<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> <?php echo date("F", mktime(0, 0, 0, $i, 1, 2015)); ?></label>
									<?php } ?> 
								</div> 	
							</div>
							<div class="clearfix"></div>
						</div>	
						<div class="clearfix"></div>
						
						<div class="row_form">
							<div class="col-md-6 col-xs-6 short_padding pull-left">
								<div class="options_list">
									<span class="title">Category</span>
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox1" name="gr1" value="option1" checked><span class="check"></span> music</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox2" name="gr1" value="option2" checked><span class="check"></span> music</label> 
									<label class="radio-inline"> <input type="checkbox" id="inlineCheckbox3" name="gr1" value="option3" checked><span class="check"></span> music</label> 
								</div> 	
							</div>
							<div class="clearfix"></div>
						</div>	
						<div class="clearfix"></div>
			
						<br />
			        	<a href="#">clear all</a> | <a href="#">select all</a>
			        </form>
			     </div>
		    </div>
		    
		    <div class="col-md-3 nopadding" id="column2">
		    
		    	<?php include 'include/pages/search/events.php'; ?>
		    
		    </div>
		    
		    <div class="col-md-3 noborder nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding " id="column4"></div>
		    
		</div>
	</div>
</content>

<?php include 'include/slideshow.php'; ?>

<?php include 'include/footer.php'; ?>

<script>

	function openEvent(){
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		var url = 'include/elements/event_detail.php';
		var class_bootstrap = 'col-md-3';
		
		if (oldSlide && newSlide && url != '#'){
			closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		}
	}

	$(function(){
		openSlide($('#column2'), null, 'col-md-9 hotel nopadding');
	})

</script>