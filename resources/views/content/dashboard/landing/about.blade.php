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
                      <h3 class="breadcrumb__title">About Us</h3>
                   </div>
                   <div class="breadcrumb__list">
                      <span><a href="index.html">Home</a></span>
                      <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                      <span>About Us</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- about-3 03 area start -->
    <section class="rr-about-3-area pb-120 pt-120 fix">
       <div class="container">
          <div class="row">
             <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                <div class="rr-about-3-thumb">
                   <img src="{{('landing/assets/img/about/img-sm.jpg')}}" alt="">
                </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="rr-about-title-wrapper mt-140 ml-40">
                   <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">Tentang Ayu Paras Sona Wedding</span>
                   <h3 class="rr-section-title pb-15 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s"> Kami Akan Mewujudkan Pernikahan Impian Anda</h3>
                   <div class="rr-section-main mb-40 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                    <p>Telah lama diketahui bahwa seorang pembaca akan teralihkan perhatiannya oleh isi halaman saat melihat tata letaknya. Tujuan menggunakan Lorem Ipsum adalah karena distribusi hurufnya lebih atau kurang normal.</p>
      <p>Konten ini, konten ini', membuatnya terlihat seperti bahasa Inggris yang dapat dibaca. Banyak paket penerbitan desktop dan editor halaman web kini menggunakan Lorem Ipsum sebagai teks model default mereka.</p>
                   </div>
                   <div class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                      <a href="about.html" class="rr-btn-2"><span>More
                            About Us <i class="fa-sharp fa-solid fa-arrow-right"></i></span></a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- about-3 03 area end -->
    <!-- fact area start -->
    <div class="rr-funfact-2-area p-relative fix">
       <div class="container">
          <div class="rr-funfact-2">
             <div class="row gx-30">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".3s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="{{('landing/assets/img/counter/icon.png')}}" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="1542">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Flower Arrangements</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".5s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="{{('landing/assets/img/counter/icon-02.png')}}" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="1260">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Ceremonies</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".7s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="{{('landing/assets/img/counter/icon-03.png')}}" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="150">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Wedding Cakes</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp mb-30" data-wow-duration=".9s"
                   data-wow-delay=".9s">
                   <div class="rr-funfact-2-content text-center fix p-relative">
                      <div class="rr-funfact-2-number d-flex align-items-center justify-content-center">
                         <div class="rr-funfact-2-icon mr-15">
                            <img src="{{('landing/assets/img/counter/icon-04.png')}}" alt="">
                         </div>
                         <div class="rr-funfact-2-info">
                            <div class="rr-funfact-2-counter d-flex align-items-center">
                               <h5 class="rr-funfact-2-number purecounter" data-purecounter-duration="1"
                                  data-purecounter-end="1000">0</h5>
                               <b>+</b>
                            </div>
                            <div class="rr-funfact-2-text">
                               <span>Happy Couples</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- fact area end -->
    <!-- service-3 area start -->
    <section class="rr-service-3-area pt-120 fix">
       <div class="container p-relative">
          <div class="row">
             <div class="col-xl-12 col-lg-10 col-md-10 col-12">
                <div class="rr-section-title-wrapper mb-40">
                   <span class="rr-section-subtitle wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">Our
                      Services</span>
                   <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">We're
                      Providing The Best Digital <br/> Wedding Solution</h3>
                </div>
             </div>
          </div>
          <div class="rr-services-arrow-box d-none d-md-block ">
             <button class="postbox-arrow-next">
                <i class="fa-sharp fa-solid fa-angle-left"></i>
             </button>
             <button class="postbox-arrow-prev">
                <i class="fa-sharp fa-solid fa-angle-right"></i>
             </button>
          </div>
          <div class="swiper-container rr-services-2-active">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                      <div class="rr-service-3-icon">
                         <img src="{{('landing/assets/img/service/icon.png')}}" alt="">
                      </div>
                      <div class="rr-service-3-content">
                         <h4 class="rr-service-3-title"><a href="services-details.html">Wedding Reception</a></h4>
                         <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                         <div class="rr-service-3-btn">
                            <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                      <div class="rr-service-3-icon">
                         <img src="{{('landing/assets/img/service/icon02.png')}}" alt="">
                      </div>
                      <div class="rr-service-3-content">
                         <h4 class="rr-service-3-title"><a href="services-details.html">Photography Event</a></h4>
                         <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                         <div class="rr-service-3-btn">
                            <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                      <div class="rr-service-3-icon">
                         <img src="{{('landing/assets/img/service/icon03.png')}}" alt="">
                      </div>
                      <div class="rr-service-3-content">
                         <h4 class="rr-service-3-title"><a href="services-details.html">Bridal Dressup</a></h4>
                         <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                         <div class="rr-service-3-btn">
                            <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-service-3-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                      <div class="rr-service-3-icon">
                         <img src="{{('landing/assets/img/service/icon04.png')}}" alt="">
                      </div>
                      <div class="rr-service-3-content">
                         <h4 class="rr-service-3-title"><a href="services-details.html">Wedding Decoration</a></h4>
                         <p>Lorem Ipsum you need be sure there isn't anything else.</p>
                         <div class="rr-service-3-btn">
                            <a href="services-details.html">Read More <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- service-3 area end -->
    <!-- project-slider area start -->
    <section class="rr-project-slider-area rr-project-slider-bg p-relative fix pt-120">
       <div class="container-fluid">
          <div class="row gx-30">
             <div class="col-lg-12">
                <div class="rr-section-title-wrapper mb-40 text-center p-relative z-index-3">
                   <span class="rr-section-subtitle wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">Our
                      Projects</span>
                   <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">Our
                      Amazing Work</h3>
                </div>
             </div>
          </div>
          <div class="swiper-container rr-project-active">
             <div class="swiper-wrapper">
                <div class="swiper-slide">
                   <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                      <div class="rr-project-slider-thumb">
                         <img src="{{('landing/assets/img/project/image.jpg')}}" alt="">
                      </div>
                      <div class="rr-project-slider-content text-center">
                         <h3 class="rr-project-slider-title"><a href="project-details.html">Wedding Ring</a></h3>
                         <span>Adipiscing mauris sed metus dictum</span>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                      <div class="rr-project-slider-thumb">
                         <img src="{{('landing/assets/img/project/image1.jpg')}}" alt="">
                      </div>
                      <div class="rr-project-slider-content text-center">
                         <h3 class="rr-project-slider-title"><a href="project-details.html">Wedding Bliss</a></h3>
                         <span>Adipiscing mauris sed metus dictum</span>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                      <div class="rr-project-slider-thumb">
                         <img src="{{('landing/assets/img/project/image2.jpg')}}" alt="">
                      </div>
                      <div class="rr-project-slider-content text-center">
                         <h3 class="rr-project-slider-title"><a href="project-details.html">Wedding Dressup</a></h3>
                         <span>Adipiscing mauris sed metus dictum</span>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                      <div class="rr-project-slider-thumb">
                         <img src="{{('landing/assets/img/project/image3.jpg')}}" alt="">
                      </div>
                      <div class="rr-project-slider-content text-center">
                         <h3 class="rr-project-slider-title"><a href="project-details.html">Decoration Plan</a></h3>
                         <span>Adipiscing mauris sed metus dictum</span>
                      </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="rr-project-slider-item wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                      <div class="rr-project-slider-thumb">
                         <img src="{{('landing/assets/img/project/image4.jpg')}}" alt="">
                      </div>
                      <div class="rr-project-slider-content text-center">
                         <h3 class="rr-project-slider-title"><a href="project-details.html">Made With Love</a></h3>
                         <span>Adipiscing mauris sed metus dictum</span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- project-slider area end -->
    <!-- rr-testimonial-single-single area start -->
    <div class="rr-testimonial-single-area gray-bg fix">
       <div class="container p-relative">
          <div class="row gx-30">
             <div class="col-lg-12">
                <div class="rr-section-title-wrapper mb-40 text-center">
                   <span class="rr-section-subtitle wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">Our
                      Testimonial</span>
                   <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">Feedback from Clients"</h3>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-xl-8 offset-xl-2 col-lg-12 col-md-12 col-12 p-relative">
                <div class="rr-testimonial-single-wrap">
                   <div class="rr-testimonial-single-info p-relative">
                      <div class="rr-testimonial-single-quate-icon  wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                         <span><img src="{{('landing/assets/img/testimonial/quate.png')}}" alt=""></span>
                      </div>
                      <div class="rr-testimonial-single-quate-icon-right  wow rrfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                         <span><img src="{{('landing/assets/img/testimonial/quate-2.png')}}" alt=""></span>
                      </div>
                      <div class="rr-testimonial-item-active">
                         <div class="rr-testimonial-single-item text-center">
                            <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied customer of , I want to share my positive experience with others. <br/>
                               Their software as a service platform has greatly improved the efficiency and <br/>
                               productivity of our business operations. </p>
                            <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                               <h3>Evan Lwis</h3>
                            </div>
                         </div>
                         <div class="rr-testimonial-single-item text-center">
                            <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied customer of , I want to share my positive experience with others. <br/>
                               Their software as a service platform has greatly improved the efficiency and <br/>
                               productivity of our business operations. </p>
                            <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                               <h3>Evan Lwis</h3>
                            </div>
                         </div>
                         <div class="rr-testimonial-single-item text-center">
                            <p class=" wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">"As a satisfied customer of , I want to share my positive experience with others. <br/>
                               Their software as a service platform has greatly improved the efficiency and <br/>
                               productivity of our business operations. </p>
                            <div class="designation wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                               <h3>Evan Lwis</h3>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- rr-testimonial-single-single area end -->
   <!-- brand area end -->
   <section class="rr-brand-area pb-120 fix">
    <div class="container">
       <div class="row gx-30">
          <div class="col-xl-4 col-lg-4 col-md-12 col-12">
             <div class="rr-brand-content mt-45">
                <h4 class="rr-brand-title wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Our Trusted Branding Partners</h4>
             </div>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-12 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
             <div class="swiper-container rr-brand-active">
                <div class="swiper-wrapper">
                   <div class="swiper-slide">
                      <div class="rr-brand-item text-end">
                         <img src="{{('landing/assets/img/brand/brand-1.png')}}" alt="">
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="rr-brand-item text-end">
                         <img src="{{('landing/assets/img/brand/brand.png')}}" alt="">
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="rr-brand-item text-end">
                         <img src="{{('landing/assets/img/brand/brand2.png')}}" alt="">
                      </div>
                   </div>
                   <div class="swiper-slide">
                      <div class="rr-brand-item text-end">
                         <img src="{{('landing/assets/img/brand/brand4.png')}}" alt="">
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
