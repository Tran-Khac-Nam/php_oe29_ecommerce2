<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') - {{ config('config.name') }} </title>
        <link rel="icon" href="{{ config('config.favicon') }}" type="image/png">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/normalize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/common/css/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/customer/style.css') }}">
        @if(Request::route()->getName() != 'show_cart')
            <link rel="stylesheet" href="{{ asset('css/customer/minicart.css') }}">
        @endif
        @yield('css')
    </head>
    <body>
        @include('layouts.header')
        <div class="container">
            <div class="site-content">
                @yield('content')
            </div>
        </div>
        @if(Request::route()->getName() != 'show_cart')
        @endif
        @include('layouts.footer')
        <script src="{{ asset('bower_components/common/js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('bower_components/common/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/common/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('bower_components/common/js/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('js/customer/custom.js') }}"></script>
        @if(Request::route()->getName() != 'show_cart')
            <script src="{{ asset('js/customer/minicart.js') }}"></script>
        @endif
        @yield('js')
    </body>
</html>
