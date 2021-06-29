<footer>
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="footer-about">
               <a href=""> <img src="{{URL::to('/assets/web/new')}}/images/footer-logo.jpg"> </a>
               <h6> Email: orders@247directskips.com </h6>
               <h6> Company Reg No: 13294579 </h6>
               <h6> Reg No: CBDU382765 </h6>
               <h6> Opening Hours: 8.30 to 5pm (Mon-Fri) </h6>
               <h5> Telephone Number: 0330 9125 247 </h5>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="footer-list footer-list1">
               <h5> QUICK LINKS </h5>
               <ul>
                  <li> <a href="{{URL::to('/about')}}"> About Us </a></li>
                  <li> <a href="{{URL::to('/contact')}}"> Contact Us </a></li>
                  <li> <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-type3"> Terms & Conditions </a></li>
                  <li> <a href="javascript:void(0)" data-toggle="modal" data-target="#largeModal-7"> Terms of Use </a></li>
                  <li> <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-type4"> Privacy Policy </a></li>
                  <li> <a href="javascript:void(0)" data-toggle="modal" data-target="#largeModal-6"> Cookie Policy </a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="footer-list">
               <h5> LOCATIONS </h5>
                <ul>
                  <li> <a href=""> Hampshire </a></li>
                  <li> <a href=""> Dorset </a></li>
                  <li> <a href=""> Wiltshire </a></li>
                  <li> <a href=""> West Sussex </a></li>
                  <li> <a href=""> Surrey </a></li>
                  <li> <a href=""> Oxfordshire </a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="footer-list footer-list2">
               <h5> PAYMENT METHODS ACCEPTED </h5>
               <img src="{{URL::to('/assets/web/new')}}/images/payment-methods.jpg">
            </div>
            <div class="footer-social">
               <h5> FOLLOW US ON </h5>
               <a href="https://www.facebook.com/247-Direct-Skips-110573287782716"> <img src="{{URL::to('/assets/web/new')}}/images/fb-icon.png"> </a>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Section Ends Here -->
<!-- Copyright Section Starts Here -->
<section class="copyrights-sec bg-orange">
   <div class="container">
      <span> © 2021 - 24/7 Direct Skips Ltd.   </span>
   </div>
</section>
<!-- Copyright Section Ends Here -->

<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "110573287782716");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>