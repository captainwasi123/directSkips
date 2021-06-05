@extends('web.support.master')
@section('title', 'Home')
@section('content')

	<div class="section-1">
      <div class="container-fluid">
        <div class="row">
          
          @if(session()->has('success'))
          <div class="col-md-5 success_block">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Symbol_confirmed.svg/584px-Symbol_confirmed.svg.png">
              <div class="head">
                <br>
                <h2> Success.! {{ session()->get('success') }}</h2>
                <br><br>
              </div>
          </div>
          @else
          <div class="col-md-12 col-sm-12 col-lg-5 full-col order-lg-2">
            <form id="regForm" action="{{URL::to('/order/submit')}}" method="post">
            	{{csrf_field()}}
              <div class="head">
                <h2> BOOK YOUR SKIP NOW</h2>
                <h5>“With a Postcode and Click, <span class="mob-block"> We'll deliver a skip” </span> </h5>
                <span class="step">Stage 01<p>Enter Postcode</p></span>
                <span class="step">Stage 02<p>Type of Waste</p></span>
                <span class="step">Stage 03<p>Skip Size</p></span>
                <span class="step">Stage 04<p>Confirmation</p></span>
                <span class="step">Stage 05<p>Payment</p></span>
              </div>

              <div class="tab">    
                <h6 style="font-size: 17px; padding: 20px 0px; text-align:center;">
                <span style="color: #eb7c32;">Stage 1 of 5: </span>Enter Your Postcode & Drop Off Location</h6>
                <label class="input-fields" style="position:relative;">Enter Postcode:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b class="bold-wali" style=""> (Outward Code) </b>
                <!--<label class="input-fields" style="position:relative;">Enter Postcode:</br>(Districk Only)-->
                <span>
                  <input style="margin-left: -2px;" type="text" placeholder="E.G. Postcode SO19" id="f_postalcode" oninput="this.className = ''" onpaste="validatePostCode(this.value)" name="postcode">
                  <span class="pc_label warn_label"></span>
                </span>
                </label>
                <label class="input-fields">Drop off Location:
                  <span>
                    <select name="dropoff_type" id="f_dropoff">
                      <option oninput="this.className = ''" value="2">(On Private Property)</option>
                      <option oninput="this.className = ''" value="1">(On a Public Road) License Required</option>
                    </select>
                  </span>
                </label>
                <span id="myBtn">
                   <a href="javascript:void()">  <img id="myBtn1" style="width:18px;" src="{{URL::to('/')}}/assets/web/images/i-icon.png" > </a>
                </span>

                      
              </div>
              <div class="tab">
                <h6 style="font-size: 17px; padding: 20px 0px;text-align:center;">
                  <span style="color: #eb7c32;">Stage 2 of 5: </span>Select the Type of Waste  <span class="st-modal" id="myBtn">
                 <a href="javascript:void(0)">  <img id="myBtn2" src="{{URL::to('/')}}/assets/web/images/i-icon.png" > </a>
                </span>
                </h6>      
                <div class="radio-btn">
                <div class="row">
                	@php $x=1; @endphp
                	@foreach($type as $val)
	                  <div class="col-md-6">
	                    <label class="input-fields">
	                    	<h6>
	                    		<input type="radio" name="service_type" value="{{$val->id}}|{{$val->service}}" {{$x==1 ? 'checked' : ''}}> 
	                    		{{$val->service}}
	                    	</h6>  
	                    </label>
	                  </div>
	                  @php $x++; @endphp
                  	@endforeach                       
                </div>
                </div>
                
                
              </div>
              <div class="tab scroll">
                  <h6 style="font-size: 17px; padding: 20px 0px;text-align:center;">
                    <span style="color: #eb7c32;">Stage 3 of 5: </span>Select your Skip Size
                  </h6>

                  <div id="type_block">
	                  
	              </div>
                  <div class="delivery-dates">
                      <h4 class="note-text1"> <strong> <b><ul style="text-decoration:underline;padding:0px !important;"> Please Note </ul></b> </strong> Delivery and Collection dates are a guide only. Maximum Skip Hire period is <b style="text-decoration:underline;">14</b> days.    </h4>
                    <label class="input-fields">Delivery Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     
                    </label>
                     <span>
                        <input type="text" class="datepicker" id="del_date" oninput="this.className = ''" name="delivery_date">
                      </span>
                    <label class="input-fields">Collection Date:&nbsp;&nbsp;&nbsp;
                      
                    </label>
                    <span>
                        <input type="text" class="datepicker" id="col_date" oninput="this.className = ''" name="collection_date">
                      </span>
                    <span class="skip-info1"> *Approximate skip dimensions – actual sizes will vary depending on the local supplier used to deliver the skip. </span>
                  </div>
              </div>            
              <div class="tab scroll">
                <h6 style="font-size: 17px; padding: 20px 0px;text-align:center;">
                  <span style="color: #eb7c32;"> Stage 4 of 5: </span>  Confirmation/Review
                </h6>
                <br>
                <div class="order-details">
                  <h5 class="order-head"> ORDER DETAILS</h5>
                    <div class="order-depth">
                      <p>Drop off Location: <span class="b-details">(On Private Property)</span></p>
                      <p>Type of Waste Selected: <span class="b-details" id="od_type"></span></p>
                      <p>Skip Size: <span class="b-details" id="od_size"></span></p>
                      <p class="mob-block4">Delivery Date/Collection Date: <span class="b-details"><span id="od_del"></span> / <span id="od_col"></span></span></p>
                      <p class="mob-block4">Total Price (including VAT @ 20%): <span class="b-details" id="od_price"></span></p>
                   </div>
                </div>
                <br>
                <p style="font-size: 15px;text-align:center;"> Delivery/Billing Details</p>
                <div class="row">
                  <div class="col-md-6">
                    <label class="input-fieldss">First Name:&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="text"  oninput="this.className = ''" onkeyup="setValues('odd_first_name', this.value)" name="first_name">
                      </span>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="input-fieldss">Last Name:&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="text"  oninput="this.className = ''" onkeyup="setValues('odd_last_name', this.value)" name="last_name">
                      </span>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="input-fieldss" >Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="email"  oninput="this.className = ''" onkeyup="setValues('odd_email', this.value)" name="email">
                      </span>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="input-fieldss">Tel No:&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="number"  oninput="this.className = ''" onkeyup="setValues('odd_phone', this.value)" name="phone">
                      </span>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="input-fieldss" >Address:&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="text"  oninput="this.className = ''" onkeyup="setValues('odd_address', this.value)" name="address">
                      </span>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="input-fieldss">Address 2:&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="text"  oninput="this.className = ''" onkeyup="setValues('odd_city', this.value)" name="city">
                      </span>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="input-fieldss" >County:&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="text"  oninput="this.className = ''" onkeyup="setValues('odd_country', this.value)" name="country">
                      </span>
                    </label>
                  </div>
                  
                  <div class="col-md-6">
                    <label class="input-fieldss">Postcode:&nbsp;&nbsp;
                      <span style="padding: 0px;">
                        <input type="text" id="postcode_full" oninput="this.className=''" name="cust_postcode" onkeyup="setValues('odd_pstt_code', this.value)">
                        <input type="text" oninput="this.className=''"class="postcode_prefix" name="postal_code" id="pst_code" disabled>
                      </span>
                    </label>
                  </div> 
                  <div class="col-md-12">
                    <label class="input-fieldss" > <small style="font-size: 100%; display: inline-block;width: 60px;"> Delivery Instructions: </small>
                      <span style="padding: 0px;">
                        <textarea name="comments" class="comments-area" style="resize:none;" onkeyup="setValues('odd_comments', this.value)"></textarea>
                      </span>
                    </label>
                  </div>             
        
                </div>
                <br>
                <div>
                  <label class="input-fields">
                    <h6>
                      <b> <input type="checkbox" name="billing_address" class="billing_address" value="1"> I have a different billing address (please complete) </b>
                      <div id="billing_block">
                        
                      </div>
                      <b> <input type="checkbox" name="terms" id="termsCheck" required>  I confirm that I have read and agree to the <strong> 24/7 Direct Skips Ltd </strong> <a href="javascript:void(0)" id="openTerms">  <span style="color:#f48135; padding-left: 0px; text-decoration: underline;"> Terms and Conditions </span> </a> and <a data-toggle="modal" data-target="#largeModal-5">  <span style="color:#f48135; padding-left: 0px; text-decoration: underline;"> Privacy Policy </span> </a>
                         </b>
                     
                    <b>  <input type="checkbox" name="newsletter" value="1"> I confirm I am happy to receive future promotional emails from <strong> 24/7 Direct Skips Ltd. </strong> </b>

                   
                    </h6>
                  </label>
                </div>
              </div>
              <div class="tab scroll">
                <h6 style="font-size: 17px; padding: 20px 0px;text-align:center;"><span style="color: #eb7c32;">Stage 5 of 5: </span>Payment</h6>
                <div class="order-details">
                  <h5 class="order-head">Delivery/Billing Details </h5>
                  <div class="order-depth">
                    <p>First Name: <span class="b-details" id="odd_first_name"></span> </p>
                    <p>Last Name: <span class="b-details" id="odd_last_name"></span> </p>
                    <p>Email: <span class="b-details" id="odd_email"></span> </p>
                    <p>Tel No: <span class="b-details" id="odd_phone"></span></p>
                    <p>Address: <span class="b-details" id="odd_address"></span></p>
                    <p>Address 2: <span class="b-details" id="odd_city"></span></p>
                    <p>County: <span class="b-details" id="odd_country"></span></p>
                    <p>Postcode: <span class="b-details" id="pstt_code"></span><span class="b-details" id="odd_pstt_code"></span></p>
                    <p>Delivery Instructions: <span class="b-details" id="odd_comments"></span></p>
                  </div>
                </div>
                <br>
                <div class="order-details">
                  <h5 class="order-head">Different Billing Details</h5>
                  <div class="order-depth">
                    <p>Address: <span class="b-details" id="b_odd_address">-</span></p>
                    <p>Address 2: <span class="b-details" id="b_odd_city">-</span></p>
                    <p>County: <span class="b-details" id="b_odd_country">-</span></p>
                    <p>Postcode: <span class="b-details" id="b_odd_pstt_code">-</span></p>
                  </div>
                </div>
                <br>
              </div>
              <div style="overflow:auto;" class="prev-next-btn news">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous Step</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next Step</button>
              </div>
            </form>
          </div>
          @endif
          
          <div class="col-sm-12 col-lg-3 col-md-12 full-col order-lg-1">
            <img src="{{URL::to('/')}}/assets/web/images/character.png" class="content-bottom man-standing-image" width="100%">
          </div>
          
          
          <div class="col-md-12 col-lg-4 full-col order-lg-3"> 
            <div class="whyus">
              <h2>WHY USE 24/7 DIRECT SKIPS? </h2>
              <div class="row">
                <div class="col-md-6">
                  <div class="whyuse-point">
                    <p>FAST & RELIABLE SERVICE <img src="{{URL::to('/')}}/assets/web/images/check.png" >  </p>  
                    <p>NATIONWIDE COVERAGE <img src="{{URL::to('/')}}/assets/web/images/check.png"></p>  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="whyuse-point">
                    <p>  COMPETITIVE PRICES <img src="{{URL::to('/')}}/assets/web/images/check.png"></p>  
                    <p>  SKIP HIRE PERMITS <img src="{{URL::to('/')}}/assets/web/images/check.png" ></p>  
                  </div>
                </div>
              </div>
            </div>     
            <img src="{{URL::to('/')}}/assets/web/images/truck.png" class="content-bottom truck-load-image" width="95%">
          </div> 
        </div>
      </div>
      
      <div class="t-c-text">
         24/7 Direct Skips Ltd is a National Skip Hire Brokerage. We work with a network of reputable and reliable skip companies (across the UK) to provide you with a "one-stop shop" solution for your skip hire needs.
      </div>
      
    </div>
    
    
    
  
         
         
         
 <!-- Stage 1 Modal  -->
<div class="modal fade modal-stage1" id="largeModal-1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
     <p> Skips that are placed on a public highway require a licence from the local authority. 24/7 Direct Skips will happily arrange a skip licence for you, however you will need to contact us directly on 0330 9125 247 or email <a href="mailto:orders@247directskips.com"> orders@247directskips.com </a> as we will require some additional information from you. <br/> <br/> Please note – Once the skip has been delivered it must not be moved by anyone other than the skip provider and without obtaining prior permission from 24/7 Direct Skips. Skip licences can take up to <b> 5-7 working days </b> to obtain and vary in cost depending upon local authority.</p>
      </div>
    </div>
  </div>
</div>         

<div class="modal fade modalstage11" style="top: 60%;" id="largeModal-1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <p>Hello,<br><br>
            As the skip you are ordering will be placed on a public highway, we will need to take some additional details from you in order to process your booking. It won’t take long – we promise! 😊<br><br>
            To do this, please feel free to give us a call on <a href="tel:03309125247">0330 9125 247</a> (Mon-Fri 8.30-5pm) or email us at <a href="mailto:orders@247directskips.com">orders@247directskips.com</a> and one of the team will get back to you ASAP.<br><br>
            We look forward to hearing from you and processing your booking very shortly.<br><br>
            Kind Regards,<br>
            <strong>24/7 Direct Skips</strong>
        </p>
      </div>
    </div>
  </div>
</div>         
                  
 
  
  
    <!-- Stage 2 Modal  -->
<div class="modal fade modal-stage2" id="largeModal-2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
          <h4>General Mixed Waste Skips: </h4>
<p> This is our most popular skip that can be a mix of any material that we expect other than plasterboard that always needs to be kept separate. </p>
<h4> Hardcore/Brick Rubble Skips: </h4>
<p> Contents typically include clean bricks, concrete blocks, paving slabs, rubble and broken out concrete from foundations and pathways. If you select this skip type, contents should not include any other waste types including tarmac, soil and stones. </p>
<h4> Green Waste Skips: </h4>
<p> Garden waste typically includes leaves, flowers, grass, weeds, tree bark and pruned branches. Contents should not include large volumes of soil, treated wood, turf or tree stumps (more than 60cm in diameter), along with any other waste types. </p>
<h4> Plasterboard Skips: </h4>
<p> Plasterboard skips should only include Gypsum panel boards. Contents should not include foil backed Gypsum boards, ceramics, insulation or timber along with other waste types. </p>
<h4> Inert Skips: </h4>
<p> These skips are typically filled with soil and stone from excavation arisings. Contents should not include clay, chalk, tarmac or turf along with any other waste types. </p>
<h4> Wood Skips </h4>
<p>Contents should not include treated timber, creosoted products and MDF or any other waste types. If you need further advice, please do not hesitate to contact us. </p>
      </div>
    </div>
  </div>
</div>


 <!-- Stage 3 Modal  -->
<div class="modal fade modal-stage2" id="largeModal-3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
       <p> *Skips must only be filled as high as the sides. We reserve the right to refuse collection of a skip if it is deemed overflowing, dangerous to lift or contains waste other than that described upon booking. </p>
      <p> *STRICTLY NO: ASBESTOS, PAINT TINS, MATTRESSES, CARPETS, BATTERIES, LIQUIDS, MONITORS – In the event that any of these items are found (either upon collection of the skip by the driver, or once tipped and sorted through at a recycling centre), 24/7 Direct Skips reserves the right to either refuse collection and/or charge for incorrect material/s that must be processed and recycled in accordance with regulations.   </p>
      </div>
    </div>
  </div>
</div>




<!-- Different Billing Address-->
<div id="billing_sample" style="display: none;">
  <div class="row">
    <div class="col-md-6">
      <label class="input-fieldss" >Address 1:
        <span style="padding: 0px;">
          <input type="text"  oninput="this.className = ''" name="b_address" onkeyup="setValues('b_odd_address', this.value)">
        </span>
      </label>
    </div>
    
    <div class="col-md-6">
      <label class="input-fieldss" >Address 2:
        <span style="padding: 0px;">
          <input type="text"  oninput="this.className = ''" name="b_city" onkeyup="setValues('b_odd_city', this.value)">
        </span>
      </label>
    </div>
    <div class="col-md-6">
      <label class="input-fieldss" >County: 
        <span style="padding: 0px;">
          <input type="text"  oninput="this.className = ''" name="b_country" onkeyup="setValues('b_odd_country', this.value)">
        </span>
      </label>
    </div>
    <div class="col-md-6">
      <label class="input-fieldss">Postcode:
        <span style="padding: 0px;">
          <input type="text"  oninput="this.className = ''" name="b_postal_code" onkeyup="setValues('b_odd_pstt_code', this.value)">
        </span>
      </label>
    </div> 
  </div>
</div>

@endsection
@section('addStyle')
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <style>
    .ui-state-disabled.undefined > span {
        background-color: #fcb81c;
        color: #940e0eeb;
    }
    .ui-state-disabled.undefined > span:hover {
        cursor: no-drop;
    }
    .ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
        opacity: 1 !important;
    }
    .ui-datepicker-unselectable.ui-state-disabled.undefined.ui-datepicker-today .ui-state-default {
        background-color: #fff93abf;
        border-color: #8c8c31;
        color: #000;
    }
    .postcode_prefix {
        width: 70px ;
    }
    .postcode_full {
        width: 76px !important;
    }
     
    .radio-btn {
        left: 12%;
        position: relative;
    }
  </style>
@endsection
@section('addScript')

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
  var unavailableDates = @json($holiday);
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
	$(document).ready(function(){
        $( "#del_date" ).datepicker({
          minDate: new Date("{{date('d-M-Y', strtotime($startDate))}}"),
          beforeShowDay: nonWorkingDates,
          firstDay: 1,
          dateFormat: 'dd-mm-yy'
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
		$(document).on('keyup', '#f_postalcode', function(){
			var val = $(this).val();
			
			validatePostCode(val);
			
		});
		
		$("#f_postalcode").bind('paste', function(e) {
             var self = this;
                  setTimeout(function(e) {
                    validatePostCode($(self).val());
                  }, 0);
        });

		$(document).on('change', '#f_dropoff', function(){
			var val = $(this).val();
			if(val == 1){
				$('#nextBtn').removeAttr('onclick');
				$('.modalstage11').modal('show'); 
			}else{
				$("#nextBtn").attr("onclick","nextPrev(1)");

			}
		});
		
		
        $(document).on('change', '.billing_address', function() {
            // this will contain a reference to the checkbox   
            if (this.checked) {
                var data = $('#billing_sample').html();
                $('#billing_block').html(data);
                $('#billing_block').css({display: 'block'});
            } else {
                $('#billing_block').html('');
                $('#billing_block').css({display: 'none'});
                
                $('#b_odd_address').html('-');
                $('#b_odd_city').html('-');
                $('#b_odd_country').html('-');
                $('#b_odd_pstt_code').html('-');
            }
        });

		$('input[type=radio][name=service_type]').change(function() {
		    var val = this.value;
		    var vall = val.split('|');
		    var postal = $('#f_postalcode').val();
		    var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    	var res = xhttp.responseText;
					$('#type_block').html(res);
					setWasteType(val);
					setPrice($('input[type=radio][name=skip_size]:checked').val());
			    }else{
			        $('#type_block').html('<img src="https://i.pinimg.com/originals/df/d2/68/dfd2683c9701642c776e31d3b0d603a9.gif" style="width:100%; height:150px;"/>');
			    }
			};
			xhttp.open("GET", "response/pricing/"+val[0]+"/"+postal, true);
			xhttp.send();
		});

		$(document).on('change', 'input[type=radio][name=skip_size]',function() {
		    setSkipSize(this.value);
		    setPrice(this.value);
		});

		$(document).on('change', '#del_date',function() {
		    $('#od_del').html(this.value);
		});
		$(document).on('change', '#col_date',function() {
		    $('#od_col').html(this.value);
		});
	});

	function setWasteType(val){
		var da = val.split('|');
		document.getElementById('od_type').innerHTML = da[1];
	}
	function setSkipSize(val){
		var da = val.split('|');
		document.getElementById('od_size').innerHTML = da[0];
	}
	function setPrice(val){
		var da = val.split('|');
		document.getElementById('od_price').innerHTML = "£ "+da[3];
		document.getElementById('od_size').innerHTML = da[0];
	}

	function setValues(name, val){
		document.getElementById(name).innerHTML = val;
	}
	
	function validatePostCode(val){
		var stype = $('input[type=radio][name=service_type]:checked').val();
		var sstype = stype.split('|');
	    var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			    	var res = xhttp.responseText;
			       	if(res == 'invalid'){
						$('#nextBtn').removeAttr('onclick');
						$('.pc_label').html('Invalid Postal Code.');
					}else{
						$("#nextBtn").attr("onclick","nextPrev(1)");
						$('.pc_label').html('');
						$('#type_block').html(res);
						$('#pst_code').val(val);
						$('#pstt_code').html(val);
						setWasteType($('input[type=radio][name=service_type]:checked').val());
						setPrice($('input[type=radio][name=skip_size]:checked').val());
					}
			    }else{
			        $('#type_block').html('<img src="https://i.pinimg.com/originals/df/d2/68/dfd2683c9701642c776e31d3b0d603a9.gif" style="width:100%; height:150px;"/>');
			    }
			};
			xhttp.open("GET", "response/postalcode/"+val+"/"+sstype[0], true);
			xhttp.send();
	}
</script>

<script>
    window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#237afc"
    },
    "button": {
      "background": "#fff",
      "text": "#237afc"
    }
  },
  "type": "opt-out",
  "content": {
    "message": "Website cookies alert by Cookie Consent",
    "href": "https://cookieconsent.insites.com"
  }
})});
</script>

@endsection