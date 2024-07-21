@extends('layouts.landing')
@section('main')
 <!-- main header area end -->
 <main>

   <!-- breadcrumb area start -->
   <div class="breadcrumb__area breadcrumb__height fix p-relative" data-bg-color="#F6F8FF">
       <div class="breadcrumb__shap">
           <div class="shap">
               <img src="assets/img/error/shap.png" alt="">
           </div>
           <div class="shap-2">
               <img src="assets/img/error/shape-2.png" alt="">
           </div>
           <div class="shap-3">
               <img src="assets/img/error/shape-3.png" alt="">
           </div>
           <div class="shap-4">
               <img src="assets/img/error/shape-4.png" alt="">
           </div>
       </div>
       <div class="container">
           <div class="row gx-30">
               <div class="col-xl-12 col-md-12 text-center">
                   <div class="breadcrumb__content z-index">
                       <div class="breadcrumb__section-title-box">
                           <h3 class="breadcrumb__title">Paket</h3>
                       </div>
                       <div class="breadcrumb__list">
                           <span><a href="index.html">Home</a></span>
                           <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                           <span>Paket</span>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- breadcrumb area end -->
   <!--prodact-area-->
   <section class="tab-area rr-tab__ptb theme-background pt-120 pb-80 p-relative">
       <div class="container">
           <div class="row">
               <div class="col-xl-12 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                   <div class="rr-tab-item d-flex align-items-center justify-content-between mb-50">
                       <div class="rr-tab__text">
                           <h6>There are {{$paketCount}} products.</h6>
                       </div>
                       <div class="rr-tab__section ml-180 d-none d-lg-block">
                           <nav>
                               <div class="nav rr-tab justify-content-center " id="nav-tab" role="tablist">
                                   <button class="nav-links" id="nav-Home-tab" data-bs-toggle="tab"
                                       data-bs-target="#Home" type="button" role="tab" aria-controls="nav-Home-tab"
                                       aria-selected="false">
                                       <span class="rr-tab">
                                           <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="4" cy="4" r="4" fill="#051145" fill-opacity="0.3" />
                                               <circle cx="4" cy="15" r="4" fill="#051145" fill-opacity="0.3" />
                                               <circle cx="15" cy="4" r="4" fill="#051145" fill-opacity="0.3" />
                                               <circle cx="15" cy="15" r="4" fill="#051145" fill-opacity="0.3" />
                                           </svg>
                                       </span>
                                   </button>
                                   <button class="nav-links" id="nav-Car-tab" data-bs-toggle="tab"
                                       data-bs-target="#Car" type="button" role="tab" aria-controls="nav-Car-tab"
                                       aria-selected="false" tabindex="-1">
                                       <span class="rr-tab">
                                           <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="2.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="2.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="2.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                           </svg>

                                       </span>
                                   </button>
                                   <button class="nav-links active" id="nav-Health-tab" data-bs-toggle="tab"
                                       data-bs-target="#Health" type="button" role="tab"
                                       aria-controls="nav-Health-tab" aria-selected="false" tabindex="-1">
                                       <span class="rr-tab">
                                           <svg width="26" height="19" viewBox="0 0 26 19" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="2.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="2.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="2.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="23.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="23.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="23.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                           </svg>

                                       </span>
                                   </button>
                                   <button class="nav-links " id="nav-Education-tab" data-bs-toggle="tab"
                                       data-bs-target="#Education" type="button" role="tab"
                                       aria-controls="nav-Education-tab" aria-selected="true" tabindex="-1">
                                       <span class="rr-tab">
                                           <svg width="33" height="19" viewBox="0 0 33 19" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                                               <circle cx="2.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="2.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="2.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="23.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="30.5" cy="2.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="9.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="23.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="30.5" cy="9.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="16.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="23.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                               <circle cx="30.5" cy="16.5" r="2.5" fill="#051145"
                                                   fill-opacity="0.3" />
                                           </svg>
                                       </span>
                                   </button>
                               </div>
                           </nav>
                       </div>
                       <div class="rr-tab_sub-info sorting-type">
                           <b>Sort by : </b>
                           <select id="lan" class="rr-tab-lan-5" style="display: none;">
                               <option>Default</option>
                               <option>Most popular</option>
                               <option>Date</option>
                               <option>Trending</option>
                               <option>Featured</option>
                               <option>Discounted</option>
                           </select>
                           <div class="nice-select rr-tab-lan-5" tabindex="0"><span class="current">Default</span>
                               <ul class="list">
                                   <li data-value="Default" class="option selected">Default</li>
                                   <li data-value="Most popular" class="option">Most popular</li>
                                   <li data-value="Date" class="option">Date</li>
                                   <li data-value="Trending" class="option">Trending</li>
                                   <li data-value="Featured" class="option">Featured</li>
                                   <li data-value="Discounted" class="option">Discounted</li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

   <div class="rr-tab_content fix">
       <div class="container">
           <div class="row mb-60">
               <div class="col-xl-12 col-lg-12 col-md-12">
                   <div class="tab-content" id="nav-tabContent">
                      
                      
                       <div class="tab-pane fade active show" id="Health" role="tabpanel" aria-labelledby="nav-Health-tab"
                           tabindex="0">
                           <div class="rr-tab__wrapper">
                               <div class="row gx-30">

                                 @foreach ($paket as $p)
                                   <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6  col-12">
                                       <div class="rr-shop-item mb-30">
                                           <div class="rr-shop-thumb">
                                               <img src="{{asset('paket/' . $p->foto1)}}" alt="">
                                               <div class="rr-shop-cart-btn text-center">
                                                   <a href="{{ route('detailPaket', ['id' => $p->paket_id]) }}">Add To Cart</a>
                                               </div>
                                           </div>
                                           <div class="rr-shop-content text-center">
                                               <h4 class="rr-shop-title"><a href="{{ route('detailPaket', ['id' => $p->paket_id]) }}">{{$p->nama_paket}}</a></h4>
                                               <span>Rp. {{ number_format($p->harga, 0,',','.')   }}</span>
                                           </div>
                                       </div>
                                   </div>
                                  @endforeach
                               </div>
                           </div>
                       </div>
                   
                   </div>
               </div>
           </div>
          <div class="row">
            <div class="rr-tab_bottom-button d-flex justify-content-between">
               <h5>Showing {{ $paket->firstItem() }}-{{ $paket->lastItem() }} of {{ $paketCount }} item(s)</h5>
               <div class="basic-pagination bg-color">
                   <nav>
                       {!! $paket->links('vendor.pagination.costume') !!}
                   </nav>
               </div>
           </div>
           
          </div>
       </div>
   </div>
</section>
</main>

@endsection