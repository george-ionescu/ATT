<h1 id="titleSection" class="pull-right">Your selected flight from Bucharest to Antigua</h1>
    	<div class="clearfix"></div>
    	
    	<div class="column_content padding_column_content full_height">       
	    	<a class="flight_detail_tab tab1 pull-left active" href="#"><span class="title">Preselected Flight</span><br />This is your selected flight</a>
	        <a class="flight_detail_tab tab2 pull-left" href="#"><span class="title">Other Flights</span><br />Here you can choose another flight</a>
	        <div class="clearfix"></div>
	    	
	    	<div id="tab1">
	    		<div class="hide_on_desktop"><br /></div>
	    		<div class="flight_detail_wrapper">
			        <div class="hide_on_mobile"><?php include 'include/flight_recap_table.php'; ?></div>
		    		<div class="hide_on_desktop"><?php include 'include/flight_recap_table_mobile.php'; ?></div>
    				<div class="clearfix"></div>
    				<br />
    			</div>
    		</div>
    		<div id="tab2" style="display: none;">	
    			<form class="form-horizontal custom_form maro_background" role="form" method="post" action="/">
			    	<div class="hide_on_mobile"><br /><?php include 'include/flight_result_table_select.php'; ?></div>
		    		<div class="hide_on_desktop"><?php include 'include/flight_result_table_select_mobile.php'; ?></div>
				    <div class="clearfix"></div>
		    	</form>
			</div>
	    	
	    </div>
        <div class="clearfix"></div>
        
        
<script>
	function preload(){
		$('#tab1').hide();
		$('#tab2').show();
		$('#sort_type_1').hide();
		$('#sort_type_2').show();
		$('#titleSection').html('300 results from Bucharest to Antigua');

		$('#main_preloader').hide();
		$('#column1').removeClass('column_disabled_opacity');
		$('#column2').removeClass('column_disabled_opacity');
		$('.column_disabled2').remove();
	}
	
	$(function(){
		var newWindowWidth = $(window).width();
		
		$('.flight_detail_tab').click(function(){
			if ($(this).hasClass('tab1')){
				$('#tab1').show();
				$('#tab2').hide();
				$('#sort_type_1').show();
				$('#sort_type_2').hide();
				$('#titleSection').html('Your selected flight from Bucharest to Antigua');

				if (newWindowWidth < 1024 && $('#sort_wrapper').hasClass('in')){
					$('#sort_wrapper').height(0);
					$("#sort_wrapper").removeClass().addClass('navbar-collapse2').addClass('collapse');
				}
			}
			if ($(this).hasClass('tab2')){
				$('#main_preloader').show();
				$('#column1').addClass('column_disabled_opacity').prepend("<div class='column_disabled2'></div>");
				$('#column2').addClass('column_disabled_opacity').prepend("<div class='column_disabled2'></div>");

				if (newWindowWidth < 1024 && $('#sort_wrapper').hasClass('in')){
					$('#sort_wrapper').height(0);
					$("#sort_wrapper").removeClass().addClass('navbar-collapse2').addClass('collapse');
				}

				setTimeout(preload, 3000);
			}

			$('.flight_detail_tab').removeClass('active');
			$(this).addClass('active');

			updateAllScrolls();
		});

		$('#tab2 .book').click(function(event){
			event.preventDefault();
			event.stopPropagation();
			
			$('#tab1').show();
			$('#tab2').hide();
			$('#sort_type_1').show();
			$('#sort_type_2').hide();

			$('.flight_detail_tab').removeClass('active');
			$('.flight_detail_tab.tab1').addClass('active');

			updateAllScrolls();
		});
	});
	
	function showDetail22(id){
		$('tr.normal.' + id).toggle();
		$('tr.expand.' + id).toggle();

		updateAllScrolls();
	}

	var newWindowWidth = $(window).width();
	if (newWindowWidth < 1024){
		$('.new_design tr.normal').click(function(){
			ids = $(this).attr("class").split(' ');
			showDetail22(ids[1]);
		});
		$('.new_design tr.expand').click(function(){
			ids = $(this).attr("class").split(' ');
			showDetail22(ids[1]);
		});
	} else {
		$('.new_design').click(function(){
			showDetail22($(this).attr('id'));
		});
	}

	$('#book_button').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column2');
		var newSlide = $('#column2');
		var url = 'include/elements/signin.php';
		var class_bootstrap = 'col-md-9';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	});
	$('#book_button_mobile').click(function(event){
		event.preventDefault();
	
		var oldSlide = $('#column2');
		var newSlide = $('#column2');
		var url = 'include/elements/signin.php';
		var class_bootstrap = 'col-md-9';
		
		if (oldSlide && newSlide && url != '#'){
			changeSlide(oldSlide, newSlide, url, class_bootstrap);
		}
	});
</script>