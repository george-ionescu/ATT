<?php include 'include/header.php'; ?>

<?php include 'include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">Select a Story</h1>
		        <div class="clearfix"></div>
				
				<div class="column_content nopadding full_height">
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but1" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/story/story_1.php">
								<span class="sidebar">Story 1</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide button_big pull-right" column-close="column2" column-open="column2" href="include/pages/story/story_2.php">
								<span class="sidebar">Story 2</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
		    </div>
		    <div class="col-md-3 nopadding" id="column2">
		    	
		    </div>
		</div>
	</div>
</content>

<?php include 'include/slideshow.php'; ?>

<?php include 'include/footer.php'; ?>