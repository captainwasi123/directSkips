<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="host" content="{{URL::to('/')}}">
      <title> @yield('title') | 24/7 Direct Skips  </title>
      @include('web.support.new.style')
      @yield('addStyle')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-192041019-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-192041019-1');
    </script>
    

   </head>
   <body>
      <!-- Header Section Starts Here -->
         @include('web.support.new.header')
      <!-- Header Section Ends Here -->
      
      @yield('content')

      <!-- Footer Section Starts Here -->
         @include('web.support.new.modal')
         @include('web.support.new.footer')
      <!-- Bootstrap Javascript -->
         @include('web.support.new.script')
   </body>
</html>