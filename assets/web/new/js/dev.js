 $(document).ready(function(){

    'use strict'
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
                $('#steps_section').append(data);
                $('.page-loader').css({display:'none'});
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
                $('#steps_section').append(data);
                $('.page-loader').css({display:'none'});
            });
        });

        $(document).on('change', 'input[name="service_type"]', function(){

            $('#steps_section .step-wrapper').slice(2).remove();
            $('#next_2').css({display:'block'});
        });


    //Step 3
        $(document).on('click', '#next_3 button', function(){
            var postcode = $("#postcode").val();
            var service_type = $("input[name='service_type']:checked").val();
            
            var type = service_type.split('|');
            $('.page-loader').css({display:'block'});
            $.get( host+"/book/step_2/"+postcode+"/"+type[0], function( data ) {
                $('#next_2').css({display:'none'});
                $('#steps_section').append(data);
                $('.page-loader').css({display:'none'});
            });
        });







});


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
    var closedDates = unavailableDates;
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