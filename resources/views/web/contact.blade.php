@extends('web.support.master')
@section('title', 'Contact')
@section('content')

  <div class="contact-section-1">
      <div class="container-fluid">
        <h1 style="opacity:0">Contact Us </h1>
      </div>
    </div>
    <div class="about-section-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-sec1">
              <h1>CONTACT US</h1>
              <p>24/7 Direct Skips is open 8.30am to 5pm (Mon-Fri).</p>
              <p>For any enquiries outside of these times, please email <b style="color:black;">orders@247directskips.com</b></p>

            </div>             
          </div>
        </div>
      </div>
    </div>
    <div class="contact-section-2">
      <div class="container">
         <form class="form-horizontal" method="post" action="{{URL::to('/contact/submit')}}">
             {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
          <div class="col-md-6">
            <div class="contact-secform">
                <div class="form-group">             
                    <input type="text" class="form-control" placeholder="First Name" name="first_name" required>             
                </div>
                <div class="form-group">       
                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                </div>
                <div class="form-group">      
                    <input type="number" class="form-control" placeholder="Phone Number" name="phone" required>
                </div>
                <div class="form-group">          
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
              
             
      
              
            </div>             
          </div>
          <div class="col-md-6">
            <div class="about-sec1">
              <div class="form-group">
              
                  <textarea class="form-control" name="description" required></textarea>   
          
                </div>
            </div>             
          </div>
               
             <button type="submit" class="btn btn-default" style="    font-family: 'Montserrat';">Submit</button>       
        </div>
      </form>
      </div>
    </div>
   
    <div class="contact-section-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-sec5">
              <h1> <span style="font-weight: 700; color: #EB7C32;font-family: 'CoperBlack'; text-transform: none !important;font-variant-caps: normal !important; font-size: 25px;
    color: black;">“ With a Postcode and Click, <span class="mobile-break"> We'll deliver a skip ” </span> </h1>
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
               <a href="https://247directskips.com/">  <button type="button">Book A Skip</button> </a>
            </div>             
          </div>         
        </div>
      </div>
    </div>


@endsection
@section('addStyle')
  <style type="text/css">
      .contact-section-1 {
        background-image: url('{{URL::to('/')}}/assets/web/images/contact.jpg');
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