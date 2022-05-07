<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @hasSection('meta-tags')
        @yield('meta-tags')
    @else
        <meta name="description" content="Traders support funds">
        <meta name="keywords" content=traders, funds">
    @endif
    @hasSection('meta-images')
        @yield('meta-images')
    @else
        <meta property="twitter:image:src" content="{{ asset('img/logo-colored.png') }}">
        <meta property="og:image" content="{{ asset('img/logo-colored.png') }}">
    @endif
    {{-- kkk --}}

    <title>Traders Support Funds | @yield('title')</title>
    {{-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet"> --}}
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Dosis:500,600,700,800%7CPoppins:300,400,500,600,900"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/Magnific-Popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>

<body class="home1-vs1-bg">
    @if (Route::currentRouteName() == 'home')
        <div class="preLoader">
            <div class="preload-img"> <img src="{{ asset('img/favicon.png') }}" alt="" class="pre-img">
            </div>
        </div>
    @endif
    <div class="main-wrapper home-page1">
        {{-- {{ Route::currentRouteName() }} --}}
        {{-- url()->previous() --}}

        @include('partials.nav')
        {{-- @yield('breadcrumb') --}}
        @yield('content')
        @include('partials.footer')
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('plugins/parsley/parsley.min.js') }}"></script>
    <script src="{{ asset('plugins/retinajs/retina.min.js') }}"></script>
    <script src="{{ asset('plugins/parallax/parallax.js') }}"></script>
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('plugins/chart-js/echarts.min.js') }}"></script>
    <script src="{{ asset('js/menu.min.js') }}"></script>
    <script src="{{ asset('plugins/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('plugins/waypoints/jquery.counterup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2D8wrWMY3XZnuHO6C31uq90JiuaFzGws"></script>
    <script src="{{ asset('js/matrial.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
