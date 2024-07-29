@extends('layouts.landing')

@section('main')


<main>

    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__height fix p-relative" data-bg-color="#F6F8FF">
        <div class="breadcrumb__shap">
            <div class="shap">
                <img src="{{asset('landing/assets/img/error/shap.png')}}" alt="">
            </div>
            <div class="shap-2">
                <img src="{{asset('landing/assets/img/error/shape-2.png')}}" alt="">
            </div>
            <div class="shap-3">
                <img src="{{asset('landing/assets/img/error/shape-3.png')}}" alt="">
            </div>
            <div class="shap-4">
                <img src="{{asset('landing/assets/img/error/shape-4.png')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row gx-30">
                <div class="col-xl-12 col-md-12 text-center">
                    <div class="breadcrumb__content z-index">
                        <div class="breadcrumb__section-title-box">
                            <h3 class="breadcrumb__title">Sign Up</h3>
                        </div>
                        <div class="breadcrumb__list">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                            <span>Sign Up</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- rr-register area start  -->
    <div class="rr-register-area pt-120 pb-120">
        <div class="container container-small">
            <div class="row">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 col-12"></div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12">
                    <div class="rr-register-all-content">
                        <div class="rr-register-title-wrapper text-center mb-40">
                            <h3 class="rr-register-title">Welcome back!</h3>
                            <p>Enter your Credentials to access your account</p>
                        </div>
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="rr-register-signup-form-wrapper">
                                <div class="rr-register-item-thumb">
                                    <div class="rr-register-signup-item">
                                        <h6 class="rr-register-input-title">Email Address</h6>
                                        <input id="email" type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="rr-register-signup-item">
                                        <div class="rr-register-wrap d-flex justify-content-between">
                                            <h6 class="rr-register-input-title">Your Password</h6>
                                            <a href="#">forgot password</a>
                                        </div>
                                        <input id="password" type="password" placeholder="Enter Your Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="rr-register-button">
                                    <div class="rr-register-sing-buttom mb-25">
                                        <a href="javascript:void(0)" class="sing-btn" id="submit-link">Sign In</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                   
                        <div class="rr-register-sign-social text-center ">
                            <h5>Don’t have an account? <a href="{{route('register')}}"> Sign Up</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 col-12"></div>
            </div>
        </div>
    </div>
    <!-- rr-register area end  -->
</main>

@endsection


@section('js-tambahan')


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('submit-link').addEventListener('click', function() {
            document.getElementById('login-form').submit();
        });
    });
</script>



@endsection