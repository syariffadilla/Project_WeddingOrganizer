@extends('layouts.landing')

@section('main')
    <main>
     <!-- breadcrumb area start -->
     <div class="breadcrumb__area breadcrumb__height fix p-relative" data-bg-color="#F6F8FF">
        <div class="breadcrumb__shap">
            <div class="shap">
                <img src="{{Asset('landing/assets/img/error/shap.png')}}" alt="">
            </div>
            <div class="shap-2">
                <img src="{{Asset('landing/assets/img/error/shape-2.png')}}" alt="">
            </div>
            <div class="shap-3">
                <img src="{{Asset('landing/assets/img/error/shape-3.png')}}" alt="">
            </div>
            <div class="shap-4">
                <img src="{{Asset('landing/assets/img/error/shape-4.png')}}" alt="">
            </div>
        </div>
            <div class="container">
                <div class="row gx-30">
                    <div class="col-xl-12 col-md-12 text-center">
                        <div class="breadcrumb__content z-index">
                            <div class="breadcrumb__section-title-box">
                                <h3 class="breadcrumb__title">Notif</h3>
                            </div>
                            <div class="breadcrumb__list">
                                <span><a href="{{ route('utama') }}">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                                <span>Pesanan Berhasil</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="text-center mb-5">
                            <h2>Pesanan Berhasil!</h2>
                            <p>Admin akan mengirimkan konfirmasi pesanan melalui WhatsApp.</p>

                            <img src="{{asset('berhasil.svg')}}" alt="" srcset="">
                        </div>
                        <div class="text-center">
                            <a href="http://localhost:8000/user/dashboard/user/pesanan" class="btn btn-primary mb-1">Lihat Pesanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
