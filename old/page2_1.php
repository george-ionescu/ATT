<?php include '../include/header.php'; ?>

<?php include '../include/header_pages.php'; ?>

<content>
	<div class="container-fluid full_height padding_content">
		<div class="row full_height">
			<div class="col-md-3 nopadding" id="column1">
				<h1 class="pull-right">Select a Destination</h1>
		        <div class="clearfix"></div>
		        
		        <div class="column_content nopadding full_height">
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but1" class="slide assisted button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/assisted.php">
								<span class="sidebar">Paris</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								<span class="button_after_big_info"><i class="fa fa-plus-circle"></i>more info</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but2" class="slide assisted button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/assisted.php">
								<span class="sidebar">Londra</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								<span class="button_after_big_info"><i class="fa fa-plus-circle"></i>more info</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but3" class="slide assisted button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/assisted.php">
								<span class="sidebar">Madrid</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								<span class="button_after_big_info"><i class="fa fa-plus-circle"></i>more info</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 nopadding">
							<a id="but4" class="slide assisted button_big pull-right" column-close="column2" column-open="column2" href="ajax/pages/assisted.php">
								<span class="sidebar">Barcelona</span>
								<img class="img-responsive col-xs-12" src="images/tab.jpg" alt="" />
								<span class="button_after_big_info"><i class="fa fa-plus-circle"></i>more info</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
		    </div>
		    
		    <div class="col-md-3 nopadding" id="column2"></div>
		    
		    <div class="col-md-3 nopadding" id="column3"></div>
		    
		    <div class="col-md-3 nopadding" id="column4"></div>
		</div>
	</div>
</content>

<?php include '../include/slideshow.php'; ?>

<?php include '../include/footer.php'; ?>

<script>
	$(function(){
		$('.button_after_big_info').click(function(event){
			event.preventDefault();
			event.stopPropagation();

			if (!$(this).hasClass('active')){

				$(this).addClass('active');
				$(this).parent().addClass('active');
				$(this).find('.fa').removeClass('fa-plus-circle').addClass('fa-minus-circle');
				
				var oldSlide = $('#column2');
				var newSlide = $('#column2');
				var url = 'ajax/pages/assisted_info.php';
				var class_bootstrap = 'col-md-3';
				
				if (oldSlide && newSlide && url != '#'){
					changeSlide(oldSlide, newSlide, url, class_bootstrap);
				}
			} else {
				$(this).removeClass('active');
				$(this).parent().removeClass('active');
				$(this).find('.fa').removeClass('fa-minus-circle').addClass('fa-plus-circle');

				closeSlideById('column2');
			}
		});
	});
</script>