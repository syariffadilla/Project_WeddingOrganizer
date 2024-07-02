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
                      <h3 class="breadcrumb__title">Pricing Plan</h3>
                   </div>
                   <div class="breadcrumb__list">
                      <span><a href="index.html">Home</a></span>
                      <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                      <span>Pricing Plan</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- price area start -->
    <section class="rr-pricing-area p-relative pt-90 pb-90 fix">
       <div class="container">
          <div class="row gx-30">
             <div class="rr-section-title-wrapper mb-90 text-center">
                <span class="rr-section-subtitle">Best Deals</span>
                <h3 class="rr-section-title">Best Pricing Solutions</h3>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-4 col-md-6 col-12 p-0">
                <div class="rr-pricing-item p-relative mb-30 wow fadeInUp text-center" data-wow-duration="1s"
                   data-wow-delay=".3s">
                   <div class="rr-pricing-head">
                      <h4 class="rr-pricing-tag">Day Of Facilitation</h4>
                   </div>
                   <h3 class="rr-pricing-price">$3000<span> /Event</span></h3>
                   <div class="rr-pricing-list">
                      <ul>
                         <li>Two pre-event consultations</li>
                         <li>Detailed event day timeline</li>
                         <li>Directing the ceremony processiona</li>
                         <li>Up to eight hours on-site with your coordinator</li>
                      </ul>
                   </div>
                   <div class="rr-pricing-btn">
                      <a class="rr-btn-2" href="pricing.html"><span>Select Plan</span> <i class="fa-solid fa-arrow-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-12 p-0">
                <div class="rr-pricing-item rr-pricing-item-medial p-relative active mb-30 wow fadeInUp text-center"
                   data-wow-duration="1s" data-wow-delay=".5s">
                   <div class="rr-pricing-head">
                      <h4 class="rr-pricing-tag">Full Service <span>/ Popular</span></h4>
                   </div>
                   <h3 class="rr-pricing-price">$7000<span> /Event</span></h3>
                   <div class="rr-pricing-list">
                      <ul>
                         <li>Unlimited pre-event consultations</li>
                         <li>Detailed event day timeline</li>
                         <li>Vendor recommendations, negotiations <br> and bookings</li>
                         <li>Tracking of guest RSVP’s</li>
                         <li>Directing the ceremony processional</li>
                         <li>Unlimited time on-site with your coordinator</li>
                      </ul>
                   </div>
                   <div class="rr-pricing-btn">
                      <a class="rr-btn" href="pricing.html"><span>Select Plan</span> <i class="fa-solid fa-arrow-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-12 p-0">
                <div class="rr-pricing-item p-relative mb-30 wow fadeInUp text-center" data-wow-duration="1s"
                   data-wow-delay=".3s">
                   <div class="rr-pricing-head">
                      <h4 class="rr-pricing-tag">Partial Planning</h4>
                   </div>
                   <h3 class="rr-pricing-price">$5000<span> /Event</span></h3>
                   <div class="rr-pricing-list">
                      <ul>
                         <li>Two pre-event consultations</li>
                         <li>Detailed event day timeline</li>
                         <li>Directing the ceremony processiona</li>
                         <li>Up to eight hours on-site with your coordinator</li>
                      </ul>
                   </div>
                   <div class="rr-pricing-btn">
                      <a class="rr-btn-2" href="pricing.html"><span>Select Plan</span> <i class="fa-solid fa-arrow-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- price area end -->

    <!-- brand area end -->
    <section class="rr-brand-area pb-120 fix">
       <div class="container">
          <div class="row gx-30">
             <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                <div class="rr-brand-content mt-45">
                   <h4 class="rr-brand-title">Our Trusted Branding Partners</h4>
                </div>
             </div>
             <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                <div class="swiper-container rr-brand-active">
                   <div class="swiper-wrapper">
                      <div class="swiper-slide">
                         <div class="rr-brand-item text-end">
                            <img src="{{asset('landing/assets/img/brand/brand-1.png')}}" alt="">
                         </div>
                      </div>
                      <div class="swiper-slide">
                         <div class="rr-brand-item text-end">
                            <img src="{{asset('landing/assets/img/brand/brand.png')}}" alt="">
                         </div>
                      </div>
                      <div class="swiper-slide">
                         <div class="rr-brand-item text-end">
                            <img src="{{asset('landing/assets/img/brand/brand2.png')}}" alt="">
                         </div>
                      </div>
                      <div class="swiper-slide">
                         <div class="rr-brand-item text-end">
                            <img src="{{asset('landing/assets/img/brand/brand4.png')}}" alt="">
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- brand area end -->

 </main>


@endsection