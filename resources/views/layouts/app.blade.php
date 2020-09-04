<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/client/fonts/font-awesome/4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/bootstrap.min.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/jquery.bxslider.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/font-awesome.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/magnific-popup.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/owl.carousel.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/owl.theme.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/ticker-style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/client/css/style.css') }}" media="screen">
</head>
<body>
    <div id="container">
        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')
    </div>
<script type="text/javascript" src="{{ asset('assets/client/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/jquery.migrate.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/jquery.ticker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/jquery.imagesloaded.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/retina-1.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/plugins-scroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/client/js/script.js') }}"></script>
@yield('script')
</body>
</html>
