@extends('web.support.new.master')
@section('title', 'Home')
@section('content')

<div class="page-loader">
   <div class="sp sp-volume"></div>
</div>
<!-- Home Banner Section Starts Here -->
   <section class="home-banner banner-sec mob-banner-off">
      <div class="container">
         <div class="banner-text">
            <h3> BOOK YOUR SKIP ONLINE </h3>
            <h6> <span> “With a Postcode and Click, </span> <span>  We'll deliver a skip” </span> </h6>
         </div>
         <div class="info-text">
            <p> 24/7 Direct Skips Ltd is a National Skip Hire Brokerage. We work with a network of reputable and reliable skip companies (across the UK) to provide you with a "one-stop shop" solution for your skip hire needs. </p>
         </div>
      </div>
   </section>
   <!-- Home Banner Section Ends Here -->
   <!-- All Steps Forms Section Starts Here --> 
   <section class="order-detail-sec" id="steps_section">
      <form method="post" action="{{URL::to('/order/submit')}}" id="book_form">
         @csrf
         <div class="step-wrapper">
            <div class="container">
               <div class="step-head">
                  <h4 class="step-i-icon-1"> <b class="col-orange"> STEP 01 </b> DROP OFF LOCATION <a  data-toggle="modal" data-target="#modal-type1" class="popup-icon1"> <i class="fa fa-info"> </i> </a> </h4>
                  <input type="hidden" name="postcode" id="postcode" value="{{strtoupper($_GET['postcode'])}}">
                  <input type="hidden" name="curr_date" id="curr_date" value="{{date('d-M-Y', strtotime($startDate))}}">
               </div>
               <div class="step-data">
                  <div class="step-width1">
                     <div class="form-field1 form-field5">
                        <label> PLEASE SELECT </label>
                        <select class="child-field1" name="dropoff_type" id="f_dropoff">
                           <option value="0">On Private Property</option>
                           <option value="1"> On a Public Road – License Required </option>
                        </select>
                     </div>
                     <div class="next-step" id="next_1">
                        <button type="button" class="next-step-btn"> Next Step </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </section>
   <!-- All Steps Forms Section Ends Here --> 

@endsection
@section('addScript')
  <script type="text/javascript">
   function unDates(){
      return @json($holiday);
   }
  </script>
@endsection