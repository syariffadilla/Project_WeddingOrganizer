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
                        <form class="form-horizontal action="{{ route('register') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                        <div class="rr-register-signup-form-wrapper">
                            <div class="rr-register-item-thumb">
                                <div class="rr-register-signup-item">
                                    <h6 class="rr-register-input-title">Email Address</h6>
                                    <input id="name" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="rr-register-signup-item">
                                    <h6 class="rr-register-input-title">Name</h6>
                                    <input id="name" name="no_tlfn" type="text" placeholder="Phone" class="form-control input-md" required="">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="rr-register-signup-item">
                                    <h6 class="rr-register-input-title">handphone</h6>
                                    <input id="name" name="no_tlfn" type="text" placeholder="Phone" class="form-control input-md" required="">
                                    @error('handphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="rr-register-signup-item">
                                    <h6 class="rr-register-input-title">Alamat</h6>
                                    <textarea class="form-control" id="description" name="alamat" rows="6" cols="12"></textarea>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="rr-register-signup-item">
                                    <h6 class="rr-register-input-title">Avatar</h6>
                                    <input id="avatar" type="file" placeholder="Enter Your avatar" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
                                    @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="rr-register-signup-item">
                                    <div class="rr-register-wrap d-flex justify-content-between">
                                        <h6 class="rr-register-input-title">Your Password</h6>
                                        
                                    </div>
                                    <input id="name" name="password" type="password" placeholder="password" class="form-control input-md" required="">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                            </div>
                            <div class="rr-register-button">
                                <div class="rr-register-sing-buttom mb-25">
                                    <button type="submit">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </form>
                        <div class="rr-register-button-wrap d-flex justify-content-center mb-25">
                            <div class=" rr-register-sign mr-30">
                                <a href="#">

                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.8055 8.0415H19V8H10V12H15.6515C14.827 14.3285 12.6115 16 10 16C6.6865 16 4 13.3135 4 10C4 6.6865 6.6865 4 10 4C11.5295 4 12.921 4.577 13.9805 5.5195L16.809 2.691C15.023 1.0265 12.634 0 10 0C4.4775 0 0 4.4775 0 10C0 15.5225 4.4775 20 10 20C15.5225 20 20 15.5225 20 10C20 9.3295 19.931 8.675 19.8055 8.0415Z"
                                            fill="#FFC107" />
                                        <path
                                            d="M1.15234 5.3455L4.43784 7.755C5.32684 5.554 7.47984 4 9.99934 4C11.5288 4 12.9203 4.577 13.9798 5.5195L16.8083 2.691C15.0223 1.0265 12.6333 0 9.99934 0C6.15834 0 2.82734 2.1685 1.15234 5.3455Z"
                                            fill="#FF3D00" />
                                        <path
                                            d="M10.0002 19.9999C12.5832 19.9999 14.9302 19.0114 16.7047 17.4039L13.6097 14.7849C12.6057 15.5454 11.3577 15.9999 10.0002 15.9999C7.39916 15.9999 5.19066 14.3414 4.35866 12.0269L1.09766 14.5394C2.75266 17.7779 6.11366 19.9999 10.0002 19.9999Z"
                                            fill="#4CAF50" />
                                        <path
                                            d="M19.8055 8.0415H19V8H10V12H15.6515C15.2555 13.1185 14.536 14.083 13.608 14.7855L13.6095 14.7845L16.7045 17.4035C16.4855 17.6025 20 15 20 10C20 9.3295 19.931 8.675 19.8055 8.0415Z"
                                            fill="#1976D2" />
                                    </svg>
                                    Sign in with Google
                                </a>
                            </div>
                            <div class="rr-register-sign">
                                <a href="#" class="">
                                    <img src="{{asset('landing/assets/img/sign-in/apple.png')}}" alt="img not found">
                                    Sign in with Apple
                                </a>
                            </div>
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
