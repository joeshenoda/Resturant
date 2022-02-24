<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> @if(app()->getLocale() == 'ar') مطعم   @else Resturant @endif</title>
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



    <!-- light logo : mobile -->
    <a aria-label="go back" href="index.html" class="position-absolute top-0 start-0 mt-3 mx-4 z-index-1 h--70 d-inline-flex align-items-center d-lg-none">
        <img src="assets/images/logo/logo_dark.svg" width="110" alt="...">
    </a>
     <div class="position-absolute top-0 start-0 mx-4 my-4 z-index-1 d-none d-lg-inline-block">

    <div class="row">



    <!-- go back button : desktop-->
   <!--  <a href="{{route('employee.login')}}" class="btn btn-primary rounded-circle  right " aria-label="employee  login" title="go back" data-toggle="tooltip" >
      <div>

          <i class="fi fi-arrow-start"></i>
          <span>Sign as Doctor </span>
      </div>
    </a>



    <a href="{{route('admin.login')}}" class="btn btn-primary rounded-circle  left-50 " aria-label="Admin login" title="go back" data-toggle="tooltip" >
        <div>

            <i class="fi fi-arrow-start"></i>
            <span>Sign as Admin </span>
        </div>
    </a> -->

    </div>
     </div>




    <div class="d-lg-flex min-h-100vh">

        <div class="col-12 col-lg-5 d-lg-flex bg-gradient-primary text-white d-none d-lg-block">
            <div class="w-100 align-self-center text-center">





                <div class="d-inline-block max-w-600">

                    <!-- icon -->
                    <div class="mb-5" data-aos="fade-in" data-aos-delay="50" data-aos-offset="0">
								<span class="badge badge-primary fs--45 w--100 h--100 badge-pill rounded-circle">
									<i class="fi fi-user-male mt-1"></i>
								</span>
                    </div>




                    <!-- light logo : desktop only -->
                    <a href="#" class="text-decoration-none" data-aos="fade-in" data-aos-delay="150" data-aos-offset="0">
                  <!--      <img class="w--150" src="assets/images/logo/images.png" alt="..."> -->
                        <h1 style="color: white">@if(app()->getLocale() == 'ar') مطعم   @else Resturant @endif</h1>
                    </a>


                    <!-- quote / slogan -->
                    <blockquote class="blockquote text-center mt-5" data-aos="fade-in" data-aos-delay="250" data-aos-offset="0">
                        <h2 class="h4 m-auto font-weight-light font-italic text-white">
                            {{__('Resturant')}}
                        </h2>


                        <div class="text-center pt-2 mb-auto top-0 start-0 mx-4 my-4 z-index-1 d-none d-lg-inline-block" >

                            <span class="mr-2">{{__('You can sign As Admin')}}!!!</span>
                            <a href="{{route('admin.login')}}" class="vb__utils__link font-size-16" style="color: gold;text-decoration: none">
                                {{__('Sign IN')}}
                            </a>
                        </div>


                        <div class="text-center pt-2 mb-auto top-0 start-0 mx-4 my-4 z-index-1 d-none d-lg-inline-block">
                            <span class="mr-2">{{__('You can sign As Employee')}}!!!</span>
                            <a href="{{route('employee.login')}}" class="vb__utils__link font-size-16" style="color: gold;text-decoration: none">
                                {{__('Sign IN')}}
                            </a>
                        </div>

                      <!---  <footer class="blockquote-footer mt-4 fs--18 font-weight-light text-gray-400">
                            <cite title="Source Title">Henry Ford</cite>
                        </footer> -->
                    </blockquote>


                </div>

            </div>
        </div>


        <div class="col-12 col-lg-7 d-lg-flex">

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


            <div class="w-100 align-self-center text-center py-7">


                <div class="max-w-600 w-100 d-inline-block text-align-start p-4">





                    <!-- title -->
                    <h1 class="text-primary text-center mb-5 font-weight-normal">
                        {{__('Sign IN')}}
                    </h1>

                    <!-- optional class: .form-control-pill -->



                    <form novalidate method="POST" action="{{ route('login') }}">
                        @csrf
                        @if($errors->any())
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif
                        <div class="form-group mb-4">
                            <input id="email" type="email" placeholder="{{__('Email Address')}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input id="password" placeholder="{{__('Password')}}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('message')
                            <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
                            @enderror

                        </div>
                        <button class="btn btn-primary text-center w-100">
                            <strong>{{__('Log In')}}</strong>
                        </button>
                    </form>
                    <!-- <a href="auth-forgot-password.html" class="vb__utils__link font-size-16">
                      Forgot password?
                    </a> -->
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif


                    <!-- cookie alert -->
                    <div class="text-center pt-2 mb-auto">
                        <span class="mr-2">{{__('Dont have an account?')}}</span>
                        <a href="/register" class="vb__utils__link font-size-16">
                           {{__('Sign up')}}
                        </a>
                    </div>

                </div>

            </div>
        </div>



    </div>







</div><!-- /#wrapper -->

<script src="assets/js/core.min.js"></script>

</body>
</html>
