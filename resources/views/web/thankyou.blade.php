@extends('web.support.master')
@section('title', 'Thank you for your order')
@section('content')

 
<section class="thankyou-sec">
    <div class="container">
        
        <div class="thanks-content">
            
            <img src="{{URL::to('/')}}/assets/web/images/thankyou-tick.png"  >
            <h4> Thank you for your order! </h4>
           <p> We appreciate your order and look forward to delivering/collecting* your skip on the dates you have provided. We may also contact you if we need to confirm any "delivery instructions" you have provided or to clarify the specific type of waste you are looking to dispose of. In the meantime, should you have any questions then please feel free to give us a call on <strong>0330 9125 247</strong> or email us at <a href="mailto:orders@247directskips.com">  orders@247directskips.com </a> </p>
            
            <h6> <a href="https://www.247directskips.com/"> Back to Home </a> </h6>
        </div>
        
    </div>
</section>

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