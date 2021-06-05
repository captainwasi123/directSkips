@extends('web.support.master')
@section('title', 'About')
@section('content')

<div class="about-section-1" style="background-position:center center;">
  <div class="container-fluid">
    <h1 style="opacity:0">About Us </h1>
  </div>
</div>
<div class="about-section-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about-sec1">
          <h1> About Us  </h1>
          <p>24/7 Direct Skips Ltd is a National Skip Hire service that sources and processes your skip requirement instantly online.</p>
          <p> Our goal is simple. To provide our customers with an easy, simple and efficient service – all controlled and managed through our website. </p>
          <p>  Gone are the days where you need to phone multiple suppliers to check availability and price. With a postcode and click, we'll arrange delivery of a skip on your behalf. </p>
          
          <p>We are also fully committed to diverting waste away from landfill and only work closely with reputable and licensed suppliers to ensure that as much of your skip waste is recycled as possible.</p>
        </div>             
      </div>
      <div class="col-md-6">
        <div class="about-sec1 about-image11">
          <img src="{{URL::to('/')}}/assets/web/images/about.jpg" width="100%" height="500px">
        </div>             
      </div>         
    </div>
  </div>
</div>
<div class="about-section-3">
  <div class="container">
    <div class="row">
 <!--     <div class="col-md-6">
        <div class="about-sec2">
          <h1>Looking to hire a skip?</h1>
        </div>             
      </div>-->
      <div class="col-md-12">
        <div class="about-sec3 text-center">
          <a href="https://247directskips.com/"> <button type="button">  Book A Skip</button> </a>
        </div>             
      </div>         
    </div>
  </div>
</div>


@endsection
@section('addStyle')
  <style type="text/css">
    .about-section-1 {
      background-image: url('{{URL::to('/')}}/assets/web/images/about-backround.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      padding: 150px 0px 150px 0px;
    }
   
    .about-section-3 {
        background-image: url('{{URL::to('/')}}/assets/web/images/contact-img.jpg');
        background-repeat: no-repeat;
        background-size: 100%;
        padding: 8px 0px 8px 0px;
    }
  
  </style>
@endsection