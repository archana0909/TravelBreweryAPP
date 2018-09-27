<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv=""="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Travel Brewery">
  <title>{{ config('app.name', 'Travel Brewery') }}</title>
  <meta name="description" content="The Best Travel Website for custom designed international vacation packages for all sorts of travellers looking to explore destinations like a local" />
  <meta name="Keywords" content=" Affordable European Vacation, International vacation packages ,Customised Holiday Packages, Personalised Vacations, International Honeymoon Destinations,  backpack group tours, backpacking in Europe ,best travel website, trip customisation  "/>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Styles -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
  <link href="{{asset('vendor/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
  <!-- Plugin CSS -->
  <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <!-- Theme CSS -->
  <link href="{{ asset('css/creative.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl/owl.theme.default.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>

  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '213981915623012'); // Insert your pixel ID here.
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=213981915623012&ev=PageView&noscript=1"
        /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->
        <!-- Google analytics Code -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-104500346-1', 'auto');
        ga('send', 'pageview');
        </script>
        <!--end of Google Analytics  Script  -->
      </head>
      <body>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#index-navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Travel Brewery') }}
              </a>
            </div>

            <div class="navbar-collapse collapse" id="index-navbar">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav" role="navigation">
                <li class="dropdown">
                  <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                    About <b class="caret"></b></span>
                  </a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                    <li class="presentation">
                      <a class="page-scroll" tabindex="-1" role="menuitem" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#about">What We Do</a>
                    </li>
                    <li class="presentation">
                      <a class="page-scroll" tabindex="-1" role="menuitem" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#services">Our Services</a>
                    </li>
                    <li class="presentation">
                      <a class="page-scroll" tabindex="-1" role="menuitem" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#team">Our Team</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="/itinerary">Trip Itinerary</a>
                </li>
                <li>
                  <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#feedback-home">Testimonials</a>
                </li>
                <li>
                  <a class="page-scroll" href="/blogs">Blog</a>
                </li>
                <li>
                  <a class="page-scroll" href="<?php if(!strpos($_SERVER['SCRIPT_NAME'], '/')): ?>/index.php<?php endif;?>#contact">Contact</a>
                </li>
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href="/dashboard">Dashboard</a></li>

                    <li>
                      <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')
      @include('inc.footer')

      <!-- Scripts -->
      <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
      <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
      <script src="{{ asset('vendor/owl/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/creative.js') }}"></script>

      <!-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
      CKEDITOR.replace( 'article-ckeditor' );
    </script> -->
  </body>
  </html>
