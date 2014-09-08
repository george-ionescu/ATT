
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