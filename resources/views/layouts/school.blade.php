<!DOCTYPE html>
@php(config(['app.lang' => 'ar']))
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Schools</title>

    <link rel="icon" href="{{asset('download.jpg')}}">
    <meta name="description" content="...">

    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="   {{ asset('assets/fonts/flaticon/Flaticon.woff2') }}" as="font" type="font/woff2" crossorigin>

    <!-- non block rendering : page speed : js = polyfill for old browsers missing `preload` -->

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href=" {{ asset('assets/css/core.min.css') }}">
              <link rel="stylesheet" href=" {{ asset('assets/rtl/css/core.min.css') }}">
              <link rel="stylesheet" href="{{ asset('assets/rtl/css/vendor_bundle.min.css') }} ">
        @else
              <link rel="stylesheet" href=" {{ asset('assets/css/core.min.css') }}">
                <link rel="stylesheet" href="{{ asset('assets/css/vendor_bundle.min.css') }} ">
        @endif


    <link rel="stylesheet" href="{{ asset('assets/css/vendor_bundle.min.css') }} ">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">

    <link rel="manifest" href=" {{ asset(' assets/images/manifest/manifest.json') }}">
    <meta name="theme-color" content="#377dff">

</head>
<body class="layout-admin aside-sticky header-sticky" data-s2t-class="btn-primary btn-sm bg-gradient-default rounded-circle b-0">

    <div id="wrapper" class="d-flex align-items-stretch flex-column">
        <header id="header" class="shadow-xs" style="width: 100%;background-color: #0bafc6;color: white">
        @include('school.includes.navbar')

        </header>

        <div id="wrapper_content" class="d-flex flex-fill">
        @include('school.includes.sidebar')
            <!-- Content Header (Page header) -->
            <div class="content-header" >
                <div class="container-fluid">
                    <h2 class="m-0 page-title">@yield('title')</h2>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div id="middle" class="flex-fill">
            <section class="content">

                    @include('school.includes.messages')
                    @yield('content')

            </section>
            </div>
            <!-- /.content -->
        </div>
        @include('school.includes.footer')

      </div>
    <script src="assets/js/core.min.js"></script>
    <script src="{{ asset('assets/js/core.min.js') }}"></script>
    <script src=" {{asset('/js/myfunctions.js')}}"></script>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
     <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>




<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>


@stack('js')
@stack('script')

</body>
</html>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = new Pusher('639fd589dc79974ddb39', {
        cluster: 'mt1'
    });


    //must delete if you use yajra datatable
    $(document).ready(function(){
        $('.datatable').DataTable({
            "pageLength": 25,
            columnDefs: [ { orderable: false, targets: [-1] }]
        });
    });




    </script>
