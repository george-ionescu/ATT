	<h1 class="pull-right">Hotel Info</h1>
	<div class="clearfix"></div>
	<br />
	<p style="text-align:left;">
		Name: Radisson Blu Edwardian Berkshire<br />
		Adress: 22 Park Lane, London, W1K 1BE<br />
		Phone: +44 20 7493 8000<br />
		E-mail: office@hilton.co.uk
	</p>
	<br />
	<p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting
		industry. Lorem Ipsum has been the industry's standard dummy text ever
		since the 1500s, when an unknown printer took a galley of type and
		scrambled it to make a type specimen book. It has survived not only
		five centuries, but also the leap into electronic typesetting,
		remaining essentially unchanged. It was popularised in the 1960s with
		the release of Letraset sheets containing Lorem Ipsum passages, and
		more recently with desktop publishing software like Aldus PageMaker
		including versions of Lorem Ipsum.</p>
		
	<h1 class="pull-right second-title">Hotel Photos</h1>
	<div class="clearfix"></div>
	
	<div id="photo_container" style="text-align: center;">
		<?php for ($i=1; $i<=6; $i++) { ?>
			<div class="box">
				<a href="images/hotels/<?php echo $i; ?>.jpg" rel="group">
					<img src="images/hotels/thumbs/<?php echo $i; ?>.jpg" alt="" />
				</a>
			</div> 
		<?php } ?>
	</div>
	
	<div class="clearfix"></div>


<script>
	$(function(){
		var $container = $('#photo_container');
	
		$container.imagesLoaded( function(){
		  $container.masonry({
		    itemSelector : '.box'
		  });
		});

		$(".box a").fancybox({
			'titleShow'     : false
		});
	});
</script>