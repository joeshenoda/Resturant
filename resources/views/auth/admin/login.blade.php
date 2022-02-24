


@extends('layouts.login')
@section('content')
    <form method="POST" action="{{ route('admin.login') }}" class="login100-form validate-form">
        @csrf



        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">E-Mail Address</span>
            <input class="input100" type="email" name="email" id="email" placeholder="{{ __('E-Mail Address') }}">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>






        <div class="wrap-input100 validate-input m-b-18" data-validate="Username is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" id="password" placeholder="{{ __('Password') }}">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>


        <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="ckb1">
                    Remember me
                </label>
            </div>

            <div>
                <a href="#" class="txt1">
                    Forgot Password?
                </a>
            </div>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Login
            </button>
        </div>
    </form>
@endsection
