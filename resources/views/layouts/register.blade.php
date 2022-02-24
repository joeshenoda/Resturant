<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{__('Sign UP')}}</title>
    <meta name="description" content="...">

    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="{{ asset('assets/fonts/flaticon/Flaticon.woff2') }}" as="font" type="font/woff2" crossorigin>

    <!-- non block rendering : page speed : js = polyfill for old browsers missing `preload` -->
    <link rel="stylesheet" href=" {{ asset('assets/rtl/css/core.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/rtl/css/vendor_bundle.min.css') }} ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

    <link rel="manifest" href="{{ asset(' assets/images/manifest/manifest.json ') }} assets/images/manifest/manifest.json">
    <meta name="theme-color" content="#377dff">

</head>
<body>

<div id="wrapper">
    <!-- light logo -->
    <a aria-label="go back" href="#" class="position-absolute top-0 start-0 my-2 mx-4 z-index-3 h--70 d-inline-flex align-items-center" style="color: white;font-size: 48px;text-decoration-line: none">
       <!-- <img src=" {{ asset('assets/images/logo/logo_light.svg') }}" width="110" alt="..."> -->

           {{__('Sign UP')}}
    </a>


    <div class="d-lg-flex text-white min-h-100vh bg-gradient-default">

        <div class="col-12 col-lg-5 d-lg-flex">
            <div class="w-100 align-self-center">


                <div class="py-7">
                    <h1 class="d-inline-block text-align-end text-center-md text-center-xs display-4 h2-xs w-100 max-w-600 w-100-md w-100-xs">
                        {{__('Sign UP')}}
                        <span >
                            {{__('Schools')}}
                        </span>
                    </h1>
                </div>


            </div>
        </div>


            @yield('content')
            @include('admin.includes.messages')

    </div>
</div>
<script src="{{ asset('assets/js/core.min.js') }}"></script>
<script src=" {{ asset('assets/js/vendor_bundle.min.js') }}"></script>

</body>
</html>
