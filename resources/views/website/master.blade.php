<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WoOx | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('websiteAssets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('websiteAssets/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('websiteAssets/assets/css/templatemo-woox-travel.css') }}">
    <link rel="stylesheet" href="{{ asset('websiteAssets/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('websiteAssets/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    @yield('style')
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('website.index') }}" class="logo">
                        <img src="{{ asset('websiteAssets/assets/images/logo.png') }}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('website.index') }}" class="@yield('home-active')">Home</a></li>
                        <li><a href="{{ route('website.about') }}" class="@yield('about-active')">About</a></li>
                        <li><a href="{{ route('website.deals') }}" class="@yield('deals-active')">Deals</a></li>
                        <li><a href="{{ route('website.login') }}" class="@yield('login-active')">Login</a></li>
                        <li><a href="{{ route('website.register') }}" class="@yield('register-active')">Register</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
@yield('content')

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a> Distribution: <a href="https://themewagon.com target="_blank" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('websiteAssets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('websiteAssets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('websiteAssets/assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('websiteAssets/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('websiteAssets/assets/js/wow.js') }}"></script>
  <script src="{{ asset('websiteAssets/assets/js/tabs.js') }}"></script>
  <script src="{{ asset('websiteAssets/assets/js/popup.js') }}"></script>
  <script src="{{ asset('websiteAssets/assets/js/custom.js') }}"></script>
  @yield('script')

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
