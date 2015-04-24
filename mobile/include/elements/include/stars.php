<div id="stars">
	<a id="s3" class="s3" href="#" style="display:inline-block;">3</a>
	<a id="s4" class="s4" href="#" style="display:inline-block;">4</a>
	<a id="s5" class="s5" href="#" style="display:inline-block;">5</a>
</div>

<script>
function is_touch_device() {
	  return 'ontouchstart' in window // works on most browsers 
	      || 'onmsgesturechange' in window; // works on ie10
	};
	
	$(function(){
		$('#stars a').click(function(event){
			event.preventDefault();
			event.stopPropagation();
			
			curIdTmp = $(this).attr('id').split('s');
			curPos = parseInt(curIdTmp[1]);

			if (!$(".s" + curPos).hasClass('active')){
				$(".s" + curPos).addClass('active');
			} else {
				$(".s" + curPos).removeClass('active')
			}
		});

		if (!is_touch_device()){
			$( "#stars a" ).hover(
				  function() {
				    $( this ).addClass('hover');
				  }, function() {
				    $( this ).removeClass('hover')
				  }
			);
		}
	});
</script>