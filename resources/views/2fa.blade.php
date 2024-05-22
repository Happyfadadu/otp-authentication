@extends('layouts.auth')

@section('content')


<div class="login-page-main login-bg">
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
                <h2 class="font-22 text-center text--white mb-3">Enter OTP</h2>
                <div class="text-center">
                    <p class="font-14 text-md text-center text--white mb-4">We have sent you an email with a OTP Pin. </p>
                </div>
                @if ($message = Session::get('success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    </div>
                </div>
                @endif
                <form method="POST" action="{{ route('2fa.post') }}">
                    @csrf
                    <div class="form-group">
                        <label for="numberotp" class="text--white font-14">Enter OTP</label>
                       
                        <input id="code" type="number" class="form-control otp-input-fields @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                        @error('code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                    </div>


                    <div class="mt-4 pb-2 text-center">
                        <button type="submit" class="bttn bttn-primary">Submit</button>

                    </div>

                    <div class="mt-4 text-center">
                        <a href="{{ route('2fa.resend') }}" class="text--white text text-decoration-underline font-14">Resend OTP</a>

                    </div>

                </form>
            </div>
        </div>


    </div>
</div>
@endsection