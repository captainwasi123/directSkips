<header>
   <div class="container">
      <div class="logo">
         <a href="{{URL::to('/')}}"> <img src="{{URL::to('/assets/web/new')}}/images/logo.jpg"> </a>
      </div>
      <div class="navbar-handler">
         <img src="{{URL::to('/assets/web/new')}}/images/hamburger.png">
      </div>
      <div class="navbar-custom">
         <div class="menu-item menu-active">
            <a href="{{URL::to('/')}}"> Home </a>
         </div>
         <div class="menu-item">
            <a href="{{URL::to('/about')}}"> About Us </a>
         </div>
         <div class="menu-item">
            <a href="{{URL::to('/skip-sizes')}}"> Skip Sizes </a>
         </div>
         <div class="menu-item">
            <a href="{{URL::to('/faq')}}"> FAQ </a>
         </div>
         <div class="menu-item">
            <a href="{{URL::to('/terms-and-conditions')}}"> T&Cs </a>
         </div>
         <div class="menu-item">
            <a href="{{URL::to('/contact')}}"> Contact Us </a>
         </div>
      </div>
   </div>
</header>