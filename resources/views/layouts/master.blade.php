<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>SNS | @yield('title')</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Creative Agency Bootstrap Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="theme-name" content="airspace">
    <meta name="generator" content="Themefisher Airspace Template v1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/logo.png" />


    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/bootstrap/bootstrap.min.css">
    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/Ionicons/css/ionicons.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/animate-css/animate.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/magnific-popup/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/slick/slick.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    @stack('css')

</head>

<body id="body">

    <!-- Header Start -->
    @include('layouts.partials._header')
    <!-- header close -->

    <!-- Slider Start -->
    @yield('content')

    <!-- footer Start -->
    @include('layouts.partials._footer')

    <!--Scroll to top-->
    <div id="scroll-to-top" class="scroll-to-top">
        <span class="icon ion-ios-arrow-up"></span>
    </div>
    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('assets') }}/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick Carousel -->
    <script src="{{ asset('assets') }}/plugins/slick/slick.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- filter -->
    <script src="{{ asset('assets') }}/plugins/shuffle/shuffle.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/SyoTimer/jquery.syotimer.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="{{ asset('assets') }}/plugins/google-map/map.js"></script>

    <script src="{{ asset('assets') }}/js/script.js"></script>

    @stack('js')
</body>

</html>