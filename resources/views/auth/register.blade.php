<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>@if(app()->getLocale() == 'ar') مطعم   @else Resturant  @endif</title>
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
    <link rel="preload" href="assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

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
<body>

<div id="wrapper">


    <!-- light logo -->
    <a aria-label="go back" href="index.html" class="position-absolute top-0 start-0 my-2 mx-4 z-index-3 h--70 d-inline-flex align-items-center">
      <!--  <img src="assets/images/logo/logo_light.svg" width="110" alt="..."> -->

        <h1 style="color: white">@if(app()->getLocale() == 'ar') مطعم   @else Resturant @endif </h1>
    </a>


    <div class="d-lg-flex text-white min-h-100vh" style="background: linear-gradient(180deg,#42404e 0,#1b1e29);">




        <div class="col-12 col-lg-5 d-lg-flex">
            <div class="w-100 align-self-center">


                <div class="py-7">
                    <h1 class="d-inline-block text-align-end text-center-md text-center-xs display-4 h2-xs w-100 max-w-600 w-100-md w-100-xs">
                        {{__('Sign up')}}
                        <span class="display-3 h1-xs d-block font-weight-medium">
									@if(app()->getLocale() == 'ar') مطعم   @else Resturant @endif
								</span>
                    </h1>
                </div>


            </div>
        </div>


        <div class="d-inline-block float-start">
            <ul class="list-inline m-0">

                <!-- LANGUAGE -->
                <li class="dropdown list-inline-item m-0">

                    <a id="topDDLanguage" href="#!" class="py-2 d-inline-block" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">



                        @if(app()->getLocale() == 'ar')
                            <img src="{{asset('images/flag/ku.jpg')}}"  style="width: 16px;height: 11px">


                            <span class="text-muted pl-2 pr-2">

                                عربي

                            </span>

                        @else

                            <img src="{{asset('images/flag/us.png')}}"  style="width: 16px;height: 11px">
                            <span class="text-muted pl-2 pr-2">

                                ENGLISH

                            </span>

                        @endif
                    </a>

                    <div aria-labelledby="topDDLanguage" class="dropdown-menu dropdown-menu-hover text-uppercase fs--13 px-1 pt-1 pb-0 m-0 max-h-50vh scrollable-vertical">
                        <a href="{{ route('locale', 'en') }}" class="active dropdown-item text-muted text-truncate line-height-1 rounded p--12 mb-1">
                            <img src="{{asset('images/flag/us.png')}}"  style="width: 16px;height: 11px">
                            ENGLISH
                        </a>
                        <a href="{{ route('locale', 'ar') }}" class="dropdown-item text-muted text-truncate line-height-1 rounded p--12 mb-1">
                            <img src="{{asset('images/flag/ku.jpg')}}"  style="width: 16px;height: 11px">
                            عربي
                        </a>

                    </div>

                </li>
                <!-- /LANGUAGE -->




            </ul>
        </div>



        <div class="col-12 col-lg-7 d-lg-flex">
            <div class="w-100 align-self-center text-center-md text-center-xs py-2">


                <!-- optional class: .form-control-pill -->

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{__('Email Address')}}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>






                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>






                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>


                    <div class="text-center pt-2 mb-auto">
                        <span class="mr-2">{{__('If you have an account?')}}</span>
                        <a href="/login" class="vb__utils__link font-size-16">
                            {{__('Log In')}}
                        </a>
                    </div>
                </form>

            </div>
        </div>



    </div>







</div><!-- /#wrapper -->

<script src="assets/js/core.min.js"></script>

</body>
</html>
