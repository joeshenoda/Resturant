<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>    {{__('Resturant')}} </title>
    <meta name="description" content="...">
    <link rel="icon" href="{{asset('download.jpg')}}">
    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href=" {{ asset('assets/fonts/flaticon/Flaticon.woff2') }}" as="font" type="font/woff2" crossorigin>

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href=" {{ asset('assets/css/core.min.css') }}">
        <link rel="stylesheet" href=" {{ asset('assets/rtl/css/core.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/rtl/css/vendor_bundle.min.css') }} ">
    @else
        <link rel="stylesheet" href=" {{ asset('assets/css/core.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/vendor_bundle.min.css') }} ">
    @endif


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

    <link rel="manifest" href="assets/images/manifest/manifest.json">
    <meta name="theme-color" content="#377dff">

</head>

<body class="header-sticky">
<!--

    -->
<div id="app">

    <div id="wrapper">



        @include('front.includes.messages')

        @include('front.includes.navbar')



        <main >
            @include('front.includes.messages')
            @yield('content')
        </main>




    @include('front.includes.footer')

</div>
</div>

<script src="{{ asset('assets/js/core.min.js') }}"></script>
<script src="{{ asset('js/core.min.js') }}"></script>

<script src=" {{asset('/js/frame.js')}}"></script>










@stack('script')
</body>
</html>


