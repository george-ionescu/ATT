
	$(function(){
            activateMoreLess();
	});

	$(document).on('click', '#book_button', function(event){
		event.preventDefault();
	
		var oldSlide = $('#column1');
		var newSlide = $('#column1');
		//var url = 'include/elements/trip_info.php?page=signin';
		var class_bootstrap = 'col-md-3';
		
		//if (oldSlide && newSlide && url != '#'){
                    //closeAllSlidesAndOpen(oldSlide, newSlide, url, class_bootstrap);
		//}
                
                var tripInfoHtml = $('#TripInfo').html();

                $('#column3').hide('slide', {
                    direction : 'left',
                    complete: function() {
                        //complete close
                        $('#column2').hide('slide', {
                            direction : 'left',
                            complete: function() {
                                //complete close
                                $('#column1').hide('slide', {
                                    direction : 'left',
                                    complete: function() {
                                        //complete close
                                        //changeSlide(oldSlide, newSlide, url, class_bootstrap);
                                        
                                        //show 1st column
                                        newSlide.empty().removeClass('col-md-6').addClass('col-md-3').html('<div class="column_content padding_column_content full_height mCustomScrollbar _mCS_1"></div>');
                                        newSlide.find('div').html(tripInfoHtml);
                                        $("#column1 .column_content").mCustomScrollbar("update");
                                        newSlide.show('slide', {
                                            direction: 'left',
                                            complete: function() {
                                                
                                                //show 2nd column
                                                $('#column2').removeClass('col-md-9').addClass('col-md-6');
                                                $('#column2').show('slide', {                                                    
                                                    direction: 'left',
                                                    complete: function() {
                                                        //
                                                        $("#column2 .column_content").mCustomScrollbar("update");
                                                        activateMoreLess();
                                                        
                                                }
                                                }, 200);
                                        }
                                        }, 200);


                                }
                                }, 200);
                        }
                        }, 200);
                }
                }, 200);

	});

        $(document).on('click', '#submit_button2', function() {
        
            var contactInfoHtml = $('#ContactContent').html();

            $('#column2').hide('slide', {
                direction : 'left',
                complete: function() {
                    //complete close
                    
                            //show 1st column
                            $("#column2 .column_content").empty();
                            $("#column2 .column_content").html(contactInfoHtml);
                            $('#ContactContent').empty();
                            $("#column2 .column_content").mCustomScrollbar("update");
                            $('#column2').show('slide', {
                                direction: 'left',
                                complete: function() {

                                    //show 2nd column
                                    //$('#column2').removeClass('col-md-9').addClass('col-md-6');
//                                    $('#column2').show('slide', {                                                    
//                                        direction: 'left',
//                                        complete: function() {
                                            //
                                            $("#column2 .column_content").mCustomScrollbar("update");
                                            activateMoreLess();
//
//                                    }
//                                    }, 200);
                            }
                            }, 200);

            }
            }, 200);
        });


function showOption2(nr){
        
    if (nr==2) {//fare rules
        if($('#option'+nr).html().length == 0){
        
            //request fare rules and build content
            $('#option'+nr).html('Fetching fare rules... please wait!<div class="clearfix"></div><div class="pagination-centered"><img src="{$this->basePath()}/assets/img/page_loader_mini.gif" alt="loading" style="display:block;margin:25% auto;"></div>');
            $.getJSON('{$this->url('flight',array('controller'=>'flightAjax','action'=>'fareRules'))}?result={$resultCode}&itinerary={$itineraryCode}&{$type}&{$types}',
                    function(result) {                                
                        console.log(result);
                        var noFareRules = false;
                            var fareRulesContent = '';
                            fareRulesContent += '<p>';
                            $.each(result,function(key,value){
                                console.log(key);
                                //console.log(value);
                                var ptc = '';                                    
                                if (key=='ADT') ptc = 'Adults';
                                if (key=='CHD') ptc = 'Children';
                                if (key=='ADT,CHD') ptc = 'Adults and Children';
                                if (key=='INF') ptc = 'Infants';
                                //if (fareRulesContent!='<p>') fareRulesContent += '<br>';
                                fareRulesContent += '<br><strong>';
                                fareRulesContent += ptc;
                                fareRulesContent += '</strong><br>';
                                fareRulesContent += '';
                                for (i=0;i<value.length;i++) {       
                                    var categories = value[i].Category;
                                    if (categories.length==0) {
                                        noFareRules = true;
                                    }
                                    else {
                                        for (j=0;j<categories.length;j++) {
                                            //console.log(categories[j]);
                                            var name = categories[j].Name;
                                            var description = categories[j].Description;
                                            fareRulesContent += '<br><strong>';
                                            fareRulesContent += name;
                                            fareRulesContent += '</strong><br>';
                                            fareRulesContent += '<span>';
                                            fareRulesContent += description;
                                            fareRulesContent += '</span><br>';
                                        }
                                    }   // if(categories.length==0)
                                }
                            }); //$.each(result,function(key,value){
                        
                            fareRulesContent += '</p>';
                            //console.log(fareRulesContent.length);
                            if (fareRulesContent.length<60) fareRulesContent = '<p><strong>No price policies available.</strong></p>';
                            //if (fareRulesContent=='<p><strong></strong></p>') fareRulesContent == '<p><strong>No price policies available.</strong></p>';
                            $('#option'+nr).html(fareRulesContent);
                            updateAllScrolls();
                    }
            )
            .done(function(){})
            .fail(function(){
                $('#option'+nr).html('No fare rules received.');
            })
            .always(function(){});
        }
        else {  //if($('#option'+nr).html().length == 0){
        }
    }   //if (nr==2)

    for (i=1; i<=3; i++){
        $('#option' + i).hide();
        $('#but' + i).removeClass('active');
    }
    $('#option' + nr).show();
    $('#but' + nr).addClass('active');
    updateAllScrolls();

    if ($('#option' + nr).find('.text-complete').is(":visible")){
        $('#option' + nr).find('.more').show();
        $('#option' + nr).find('.less').hide();
        $('#option' + nr).find('.text-complete').hide();
        updateAllScrolls();
    } 
}