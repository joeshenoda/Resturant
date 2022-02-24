<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" mail-content="IE=edge">
    <meta name="viewport" mail-content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <style>
        html, body {
            padding: 0px;
            margin: 0px;
            direction: rtl;
            box-sizing: border-box;
            height: 100%;
            font-family: 'DroidArabicKufiRegular';
        }

        #mail-wrapper {
            min-height: 100%;
        }

        .container {
            width: 90%;
            padding-right: 5%;
            padding-left: 5%;
        }

        @media (min-width: 1440px) {
            .container {
                width: 70%;
                padding-right: 15%;
                padding-left: 15%;
            }
        }

        #mail-navbar {
            padding: 5px 0px;
            box-shadow: 0px 1px 2px 0px #d6d6d6;
            text-align: center;
        }

        #mail-navbar #mail-logo {
            display: flex;
            justify-content: center;
            align-content: center;
        }

        #mail-navbar #mail-logo img {
            width: 100%;
        }

        #mail-content {
            padding: 50px 0px;
            font-size: 16px;
        }

        #mail-content h1 {
            font-size: 18px;
        }

        #mail-content table td, #mail-content table th {
            padding: 5px;
            border: solid 1px #ccc
        }

        #mail-footer {
            margin-top: -51px;
            background-color: #0c0c0c;
            color: #eee;
            text-align: center;
            padding: 10px 0px;
        }
    </style>

    @yield('css')
</head>
<body>
<div id="mail-wrapper">
    <div id="mail-navbar">
        <div class="container">
            <div id="mail-logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/mail/logo.png')}}" alt="egy-booking logo">
                </a>
            </div>
        </div>
    </div>
    <div id="mail-content">
        <div class="container">
            @yield('content')
        </div>
    </div>
</div>
<div id="mail-footer">
    <div class="container">
        <span> جميع الحقوق محفوظه</span> <span>&copy;</span> <span>{{date('Y')}}</span>
    </div>
</div>
</body>
</html>
