<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
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
    <link href="{{asset('vendor/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{ asset('css/creative.css') }}" rel="stylesheet">
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
          @include('inc.header')
          @yield('content')
          @include('inc.footer')

          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}"></script>

          <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
          <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js')}}"></script>
          <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
          <script src="{{ asset('js/creative.js') }}"></script>

          <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

          <script>
          CKEDITOR.replace( 'article-ckeditor' );
          </script>
        </body>
        </html>
