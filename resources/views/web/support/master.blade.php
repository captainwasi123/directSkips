<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="-pbnjuBRhQnnhtp6ogA8L2ofC4VjUDJRIxyf3CaefXQ" />
    <title>@yield('title') | 24/7 Direct Skips</title>
    @include('web.support.style')
    @yield('addStyle')
    <link rel="icon" type="image/png" sizes="16x16" href="https://247directskips.com/assets/images/favicon.png">
    
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

    @include('web.support.header')

    @yield('content')

    @include('web.support.footer')
    <div id="stop" class="scrollTop">
      <span><a class="fa fa-angle-up"> </a></span>
    </div>
  @include('web.support.script')
  @yield('addScript')
</body>
</html>
