<div id="stars">
	<a id="s3" href="#">3</a>
	<a id="s4" href="#">4</a>
	<a id="s5" href="#">5</a>
</div>

<script>
	var initStar = 3;
	var maxStar = 5;
	
	$(function(){
		$('#stars a').click(function(event){
			event.preventDefault();
			event.stopPropagation();
			
			curIdTmp = $(this).attr('id').split('s');
			curPos = parseInt(curIdTmp[1]);

			if (!$("#s" + curPos).hasClass('active')){
				$("#s" + curPos).addClass('active');
			} else {
				$("#s" + curPos).removeClass('active')
			}
			
			//$('#starValue').val(curPos);
		});
		
		/*$('#stars a').hover(
        	function(){
				curIdTmp = $(this).attr('id').split('s');
				curPos = parseInt(curIdTmp[1]);
				for (i=initStar; i<=curPos; i++){
        			$("#s" + i).css("background-image", "url(../images/star.png)");
				}
				for (i=curPos+1; i<=maxStar; i++){
        			$("#s" + i).css("background-image", "url(../images/star_line.png)");
        		}
        	}, function(){
        		curValue = parseInt($('#starValue').val());
        		for (i=initStar; i<=curValue; i++){
        			$("#s" + i).css("background-image", "url(../images/star.png)");
        		}
        		for (i=curValue+1; i<=maxStar; i++){
        			$("#s" + i).css("background-image", "url(../images/star_line.png)");
        		}
        	}
        );*/
	});
</script>