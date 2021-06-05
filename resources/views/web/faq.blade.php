@extends('web.support.master')
@section('title', 'FAQ')
@section('content')

<div class="faq-section-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h2> Frequently Asked Questions </h2>
            </div>             
          </div>         
        </div>
      </div>
    </div>
    <div class="faq-section-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="faq-sec11">
              <img src="{{URL::to('/')}}/assets/web/images/faqs-min.jpg">
            </div>             
          </div>
          <div class="col-md-6">
            <div class="faq-sec1">
              <h3 style="padding-top: 0px !important;">WHICH LOCATIONS DO YOU COVER? </h3>
              <p>24/7 Direct Skips provides Nationwide coverage meaning that we can source and supply you a skip – wherever you are located within the UK</p>
              
              <h3>ARE YOU FULLY LICENSED AND INSURED?</h3>
              <p>Absolutely. We are hold a registered Waste Brokers License (CBDU382765) and are insured as per the requirements of our business.</p>

              <h3>HOW DO YOU ENSURE YOUR NETWORK OF SUPPLIERS ARE FULLY COMPLIANT?</h3>
              <p>Each year we request an updated version of their Waste Carriers/Waste Management Licenses – as well as an up-to-date copy of their insurance certificate. We only use suppliers that can/will provide this documentation to us.</p>

              <h3>HOW QUICKLY WILL I RECEIVE MY SKIP?</h3>
              <p>Depending on the type of skip size you require, we generally look to deliver your skip within 48 hours. In some instances, this may not be possible – however we will always endeavour to communicate with you regarding expected timescales.</p>

              <h3>WHAT IF I REQUIRE A SKIP PERMIT- CAN YOU HELP?</h3>
              <p>Of course we can! We may just need to take a few more details from you initially so in this scenario please proceed to email us at <b style="color:black;">orders@247directskips.com</b> or give us a call on <b style="color:black;">0330 9125 247</b>. One of our team will get back to you as soon as possible and we will liaise with the relevant local authority to obtain the correct license for your skip.</p>
            </div>             
          </div>         
        </div>
      </div>
    </div>
    <div class="about-section-3">
      <div class="container">
        <div class="row">
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
  .about-section-3 {
    background-image: url(https://247directskips.com/assets/web/images/contact-img.jpg);
    background-repeat: no-repeat;
    background-size: 100%;
    padding: 8px 0px 8px 0px;
}
    body{
      font-family: 'Montserrat';
    }
      .faq-section-1 {
    background: #eb7c32;
    padding: 10px 0px 10px 0px;
}
.faq-section-1 h2 {
    font-size: 45px;
    color: white;
    font-variant-caps: all-petite-caps;
    font-weight: 900;
}
 
.faq-sec1 p {
    font-size: 16px;
    color: #7f7f7f;
}
 

.faq-sec11 img {
    width: 100%;
    height: 700px;
    padding-bottom: 30px;
}

@media only screen and (max-width: 767px) {
.faq-sec11 img {
    width: 100%;
    height: 400px;
    padding-bottom: 30px;
}
}
    
  </style>
@endsection