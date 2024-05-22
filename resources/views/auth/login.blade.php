@extends('layouts.auth')

@section('content')



<div class="login-box-wrap">

    <div class="login-top d-flex justify-content-between">
        <div class="login-logo">
            <a class="side-logo" href="#" title="Multichoice - Enriching Lives">
                <img src="{{('frontend/images/logo.png')}}" width="120" height="73" alt="Multichoice Logo" />
            </a>
        </div>
        <div class="support-mail text-end">
            <p class="text-rg font-14 text--white">Need help? Email us at <a href="mailto:support@email.co.za" class="text-bd text--white">support@email.co.za</a></p>
        </div>
    </div>

    <div class="login-box">
        <div class="login-box-inner">
            <h2 class="font-22 text-center text--white mb-3">Sign in</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="text--white font-14">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pwd" class="text--white font-14">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="mt-2 text-end">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text--white text text-decoration-underline font-12">{{ __('Forgot Your Password?') }}</a>

                        @endif
                    </div>
                </div>

                <div class="mt-4 pb-2 text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Sign In') }}
                    </button>
                </div>

                <div class="mt-4 text-center">
                    <a href="{{ route('register') }}" class="text--white text text-decoration-underline font-14">Single Sign-On</a>
                </div>

            </form>
        </div>
    </div>


</div>
@endsection
@section('scripts')
<script src="{{('frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{('frontend/js/custom.js')}}"></script>
@endsection