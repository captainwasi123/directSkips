@extends('web.support.master')
@section('title', 'Skip Sizes')
@section('content')

 <section class="skip-size-banner">
    
 </section>
 
    
    <section class="skip-size-sec">
        <div class="container">
            
            <div class="skip-size-head">
                <h4> Skip Sizes  </h4>
                <p> Below is a list of the various skip sizes that we offer at 24/7 Direct Skips Ltd. Understanding a skips (approx.) dimensions and their suitability for different types of waste is paramount when deciding on which skip is best to hire.  </p>
            </div>
            
            
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 order-lg-2">
                <div class="skip-size-image">
                    <img src="{{URL::to('/')}}/assets/web/images/skip-box.png"> 
                </div>
                </div>
                
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 order-lg-1">
                <div class="skip-textual">
                    <h4> 4yd Skip <br/> 
                    <span> (3.2 ft x 6.4 ft x 4.7 ft*) </span>  </h4>
                    <h5> 
                        Ideal for garden or garage clear-outs. Small Household waste. <br/> <b>   30-40 Bin Bags    </b>
                    </h5>
                    <a href="{{URL::to('/')}}" class="btn btn-default">Book Now</a>
                </div>
                </div>
                
                
            </div>
            
            
            
            <div class="row">
                 <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 order-lg-2">
                <div class="skip-size-image">
                    <img src="{{URL::to('/')}}/assets/web/images/skip-box.png"> 
                </div>
                </div>
                
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 order-lg-1">
                <div class="skip-textual">
                    <h4> 6yd Skip <br/> <span> (4.0 ft x 8.8 ft x 5.1 ft*)  </span>  </h4>
<h5> Ideal for builder’s waste. General Household waste or Inert/Brick Rubble. <br/> <b>   50-60 Bin Bags   </b>
 </h5>
                    <a href="{{URL::to('/')}}" class="btn btn-default">Book Now</a>
                </div>
                </div>
                
               
            </div>
            
            
            <div class="row">
                   <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 order-lg-2">
                <div class="skip-size-image">
                    <img src="{{URL::to('/')}}/assets/web/images/skip-box.png"> 
                </div>
                </div>
                
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 order-lg-1">
                <div class="skip-textual">
                    <h4> 8yd Skip <br/> <span>   (4.2 ft x 10.9 ft x 5.5 ft*)  </span>  </h4>
<h5> Most commonly used skip by Builders/Households.  <br/> 
More suitable for heavier items/types of waste. (No Hardcore/Inert)  <br/> 
 <b>  60-80 Bin Bags </b>  
 </h5>
                    <a href="{{URL::to('/')}}" class="btn btn-default">Book Now</a>
                </div>
                </div>
                
             
            </div>
            
            
            
             <div class="row">
                    
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 order-lg-2">
                <div class="skip-size-image">
                    <img src="{{URL::to('/')}}/assets/web/images/skip-box.png"> 
                </div>
                </div>
                
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 order-lg-1">
                <div class="skip-textual">
                    <h4> 12yd Skip <br/> <span> (5.6 ft x 12.2 ft x 5.9 ft*)  </span>  </h4>
<h5> Perfect for large house clearances or larger commercial properties. <br/>
(No Hardcore/Inert)   <br/>  <b>  100-120 Bin Bags </b>  </h5>
                    <a href="{{URL::to('/')}}" class="btn btn-default">Book Now</a>
                </div>
                </div>
             
            </div>
            
            
            <div class="skip-size-textual2">
                <p> <b> Disclaimer: </b> Skips can vary in weight, shape and size (especially when fully loaded). Therefore, customers concerned with skips being placed on their property should take adequate steps (before delivery) to “support the skip” and reduce the risk of any unintended damage. Such support measures may include the placing of wooden boards underneath the skip. </p>
                <p> *Approximate skip dimensions – actual sizes will vary depending on the local supplier used to deliver the skip. </p>
                
            </div>
            
            
            
            
        </div>
    </section>
    
    
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