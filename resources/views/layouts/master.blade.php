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
    <meta name="description" content="Star Network Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Star Network Solutions">
    <meta name="theme-name" content="Star Network Solutions">
    <meta name="generator" content="Star Network Solutions">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/fav.png" />


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    @stack('css')
    <style>
        .navigation .navbar .navbar-nav li.active>a {
            color: #f8a700;
            text-decoration: none;
        }

        .navigation .navbar .navbar-nav li>a {
            color: #000;
            font-size: 16px;
            text-decoration: none;
        }
    </style>
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

    <script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script>
    <script>
        window.start.init({
            Palette: "palette5",
            Mode: "floating right",
            Theme: "classic",
        })
    </script>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if (session()->has('success'))
        <script>
            window.onload = function() {
                toastr.success('{{ session('success') }}');
            };
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            window.onload = function() {
                toastr.error('{{ session('error') }}');
            };
        </script>
    @endif
    @stack('js')
</body>

</html>
