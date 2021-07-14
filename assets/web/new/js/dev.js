 $(document).ready(function(){

    'use strict'

    var footerHeight = $(document).height() - 200;
    if ($(window).width() < 768) {
       footerHeight = $(document).height() - 1080
    }
    else {
       footerHeight = $(document).height() - 200;
    }
    $( "#del_date" ).datepicker();
    var host = $("meta[name='host']").attr("content");
 	$(document).on('change', '#t_dropoff', function(){
        var val = $(this).val();
        if(val == '0'){
            $('#modal-type5').modal('hide');
            $('#next_1').css({display:'block'});
        }else{
            $('#modal-type5').modal('show');
            $('#next_1').css({display:'none'});
            $('#steps_section .step-wrapper').not(':first').remove();
        }
    });


    //Step 1
        $(document).on('click', '#next_1 button', function(){
            $('.page-loader').css({display:'block'});
            $.get( host+"/book/step_1", function( data ) {
                $('#next_1').css({display:'none'});
                $('#steps_section #book_form').append(data);
                $('.page-loader').css({display:'none'});

                scrollToDiv(2);
            });
        });


    //Step 2
        $(document).on('click', '#next_2 button', function(){
            var postcode = $("#postcode").val();
            var service_type = $("input[name='service_type']:checked").val();
            
            var type = service_type.split('|');
            $('.page-loader').css({display:'block'});
            $.get( host+"/book/step_2/"+postcode+"/"+type[0], function( data ) {
                $('#next_2').css({display:'none'});
                $('#steps_section #book_form').append(data);
                $('.page-loader').css({display:'none'});

                scrollToDiv(3);
            });
        });

        $(document).on('change', 'input[name="service_type"]', function(){

            $('#steps_section .step-wrapper').slice(2).remove();
            $('#next_2').css({display:'block'});
        });


    //Step 3
        $(document).on('click', '#next_3 button', function(){
            var del_date = $("#del_date").val();
            var col_date = $("#col_date").val();
            if(del_date == '' || col_date == ''){
                alert("Please select Delivery/Collection Date.");
            }else{
                var postcode = $("#postcode").val();
                $('.page-loader').css({display:'block'});
                $.get( host+"/book/step_3", function( data ) {
                    $('#next_3').css({display:'none'});
                    $('#steps_section #book_form').append(data);
                    $('.page-loader').css({display:'none'});
                    $('#t_postcode').val(postcode);

                    scrollToDiv(4);
                });
            }
        });

        $(document).on('change', '.step3_check', function(){

            $('#steps_section .step-wrapper').slice(3).remove();
            $('#next_3').css({display:'block'});
        });
        $(document).on('click', '.skip-box', function(){
            $('#steps_section .step-wrapper').slice(3).remove();
            $('#next_3').css({display:'block'});
        });
    


    //Step 4
        $(document).on('click', '#next_4 button', function(){
            let all = $(".inputfield").map(function() {
                if($(this).val() == ''){
                    $(this).css('background-color', '#ffe4e4');
                    return $(this).data('title');
                }else{
                    $(this).css('background-color', '#f2f2f2');
                }
            }).get();
            if((all.length == 0 && $('.billing_address').is(':checked') == false)  || (all.length == 0 && $('.billing_address').is(':checked') == true)){
                if ($('#terms').is(':checked')) {
                    var formdata = getfields();
                    $('.page-loader').css({display:'block'});
                    $.post({
                        url: host+"/book/step_4", 
                        data: formdata, 
                        success: function( data ) {
                            $('#next_4').css({display:'none'});
                            $('#steps_section #book_form').append(data);
                            $('.page-loader').css({display:'none'});

                            
                            scrollToDiv(5);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                } else {
                    alert('Please make sure you read and agree to 24/7 Direct Skips Ltd Terms and Conditions.');
                }
            }else{
                console.log(all.length);
            }
        });

        $(document).on('change', '.billing_address', function() {
            // this will contain a reference to the checkbox   
            if (this.checked) {
                var biling_sample = '<div class="row"><div class="col-md-6 col-lg-6 col-sm-12 col-12"><div class="form-field2"><label> Address: </label><input type="" class="child-field2 inputfield" data-title="Address" name="b_address"></div></div><div class="col-md-6 col-lg-6 col-sm-12 col-12"><div class="form-field2"><label> Address 2: </label><input type="" class="child-field2 inputfield" data-title="Address 2" name="b_city"></div></div></div><div class="row"><div class="col-md-6 col-lg-6 col-sm-12 col-12"><div class="form-field2"><label> County: </label><input type="" class="child-field2 inputfield" data-title="b_country" name="b_country"></div></div><div class="col-md-6 col-lg-6 col-sm-12 col-12"><div class="form-field2 postcode-f"><label> Post Code: </label><input type="text" class="child-field2 inputfield" data-title="Postcode" name="b_postal_code"></div></div></div>';
                $('#billing_a_block').html(biling_sample);
                $('#billing_a_block').css({display:'block'});
            } else {
                $('#billing_a_block').html('');
                $('#billing_a_block').css({display:'none'});
            }

            $('#steps_section .step-wrapper').slice(4).remove();
            $('#next_4').css({display:'block'});
        });

        $(document).on('keyup', '.inputfield', function(){
            $('#steps_section .step-wrapper').slice(4).remove();
            $('#next_4').css({display:'block'});
        });







//Postcode validation
$(document).on('keyup', '#main_postcode', function(){
    var val = filter_postcode($(this).val());
    $(this).val(val);
}).on('paste', function(e) {
    setTimeout(function(){
        var val = filter_postcode($('#main_postcode').val());
        $('#main_postcode').val(val);
    }, 0);
});




//Date Picker
$('body').on('focus',"#del_date", function(){
    var curr_date = $("#curr_date").val();
    $( "#del_date" ).datepicker({
      minDate: new Date(curr_date),
      beforeShowDay: nonWorkingDates,
      firstDay: 1,
      dateFormat: 'dd-mm-yy'
    });
});

$(document).on('change', '#del_date', function(){
    var deldate = $(this).val();
    var max_date = new Date(deldate);
    max_date.setDate(max_date.getDate()+14);
    $("#col_date").datepicker("destroy"); 
    $( "#col_date" ).datepicker({
      minDate: deldate,
      beforeShowDay: nonWorkingDates,
      firstDay: 1,
      dateFormat: 'dd-mm-yy'
    }); 
});


});

//Filter Postcode
function filter_postcode(value){
    var val = value;
    val = val.replace(/\s/g, '');
    var n = val.length;
    if(n > 7){
        var first = val.slice(0, 6);
        var last = val.substr(val.length - 1);
        val = first+last;
    }

    return val;
}


//Get form fields
function getfields(){
    var data = {
        _token : $('input[name="_token"]').val(),
        service_type : $('input[name="service_type"]:checked').val(),
        skip_size : $('input[name="skip_size"]:checked').val(),
        delivery_date : $('input[name="delivery_date"]').val(),
        collection_date : $('input[name="collection_date"]').val(),
        first_name : $('input[name="first_name"]').val(),
        last_name : $('input[name="last_name"]').val(),
        email : $('input[name="email"]').val(),
        phone : $('input[name="phone"]').val(),
        address : $('input[name="address"]').val(),
        city : $('input[name="city"]').val(),
        country : $('input[name="country"]').val(),
        t_postcode : $('input[name="postcode"]').val(),
        cust_postcode : $('input[name="cust_postcode"]').val(),
        comments : $('textarea[name="comments"]').val(),
        b_address : $('input[name="b_address"]').val(),
        b_city : $('input[name="b_city"]').val(),
        b_country : $('input[name="b_country"]').val(),
        b_postal_code : $('input[name="b_postal_code"]').val(),
        newsletter : $('input[name="newsletter"]').val(),

    }

    return data;
}





//Date Formating

function unavailable(date) {
  dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
  if ($.inArray(dmy, unavailableDates) == -1) {
      return [true, ""];
  } else {
      return [false, "", "Unavailable"];
  }
}
function nonWorkingDates(date){
    var day = date.getDay(), Sunday = 0, Monday = 1, Tuesday = 2, Wednesday = 3, Thursday = 4, Friday = 5, Saturday = 6;
    var closedDates = unDates;
    var closedDays = [[Saturday], [Sunday]];
    for (var i = 0; i < closedDays.length; i++) {
        if (day == closedDays[i][0]) {
            return [false];
        }

    }

    for (i = 0; i < closedDates.length; i++) {
        if (date.getMonth() == closedDates[i][0] - 1 &&
        date.getDate() == closedDates[i][1] &&
        date.getFullYear() == closedDates[i][2]) {
            return [false];
        }
    }

    return [true];
}
function formatDate(date) {
    var d = new Date(date);
    var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    return curr_year + "-" + curr_month + "-" + curr_date;
}

 function scrollToDiv(i) { 
    
    $('html, body').animate({
        scrollTop: $("#"+i).offset().top
    });


    // var scrollTo = $(".step-wrapper:nth-child("+i+")");
    // var container = $('html, body');
    // // Calculating new position
    // // of scrollbar
    // var position = scrollTo.offset().top 
    //     - container.offset().top 
    //     + container.scrollTop();

    // // Animating scrolling effect
    // container.animate({
    //     scrollTop: position
    // });
}