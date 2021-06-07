@extends('web.support.new.master')
@section('title', 'Home')
@section('content')

	<!-- Home Banner Section Starts Here -->
      <section class="home-banner banner-sec">
         <div class="container">
            <div class="banner-text">
              <h3> BOOK YOUR SKIP ONLINE </h3>
              <h6> <span> “With a Postcode and Click, </span> <span> We'll deliver a skip” </span> </h6>
              <form method="post" action="{{route('get.postalcode')}}">
                @csrf
                <input type="text" placeholder="Enter Your Postcode" name="postcode" value="{{session()->has('error') ? session()->get('error') : ''}}" id="main_postcode">
                <button class="submit-btn1">Next Step</button>
              </form>
              @if(session()->has('error'))
                <label class="error_message">Sorry, the postcode which you have entered is invalid.</label>
              @endif
            </div>
            <div class="info-text">
               <p> 24/7 Direct Skips Ltd is a National Skip Hire Brokerage. <span> We work with a network of reputable and reliable skip companies (across the UK) to provide you with a "one-stop shop" solution for your skip hire needs. </span> </p>
            </div>
         </div>
      </section>
      <!-- Home Banner Section Ends Here -->
      <!-- Why Use Banner Section Starts Here -->
      <section class="why-use-sec">
         <div class="container">
            <div class="whyuse-head">
               <h3> Why Use 24/7 Direct Skips? </h3>
            </div>
            <div class="row">
               <div class="standing-image">
                  <img src="{{URL::to('/assets/web/new')}}/images/left-image.jpg">
               </div>
               <div class="use-info-text">
                  <h4> QUICK & EASY BOOKING PROCESS </h4>
                  <p> Here at 24/7 Direct Skips, we like to keep things simple! That is why we have developed a safe and easy-to-follow booking system that will allow our customers to Select, Confirm and Pay for their skip in just a few minutes.  </p>
                  <p> All you need to do is simply <em> "Enter Your Postcode" </em> and with just a few clicks, you let us know which skip size you require, what type of waste you have to dispose of and the date you would like the skip delivered. We will then arrange everything for you - what’s not to like about that? </p>
               </div>
               <div class="truck-image">
                  <img src="{{URL::to('/assets/web/new')}}/images/right-image.jpg">
               </div>
               <div class="points-list">
                <h4> <span> CALL US NOW ON </span> <span> <a href="tel:03309125247" class="col-orange"> 0330 9125 247 </a> </span> </h4>
                  <p> next day delivery <img src="{{URL::to('/assets/web/new')}}/images/tick-icon.jpg"> </p>
                  <p> Competitive price <img src="{{URL::to('/assets/web/new')}}/images/tick-icon.jpg"> </p>
                  <p> Nationwide coverage <img src="{{URL::to('/assets/web/new')}}/images/tick-icon.jpg"> </p>
                  <p> Skip hire permits <img src="{{URL::to('/assets/web/new')}}/images/tick-icon.jpg"> </p>
 
               </div>
            </div>
         </div>
      </section>
      <!-- Why Use Banner Section Ends Here -->
@endsection