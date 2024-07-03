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
                            <h3 class="breadcrumb__title">Paket Details</h3>
                        </div>
                        <div class="breadcrumb__list">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                            <span>Paket Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!--shop-details start-->
    <section class="shop-filter-area pt-120 pb-60">
        <div class="container">
            <div class="row ">
                <div class="col-xl-5 col-lg-5">
                    <div class="rr-shop-details-thumb-wrapper">
                        <figure class="rr-shop-media">
                            <img src="{{asset('vendor/' . $vendor->foto)}}" height="570px" width="570px" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="rr-shop-details_main ml-20">
                        <div class="rr-shop-details__right-warp">
                            <h3 class="rr-shop-details__title-sm">{{$vendor->nama_vendor}}</h3>
                            <div class="rr-shop-details__price d-flex align-items-center">
                                <div class="price">
                                    <div class="woocs_price_code mb-20">
                                        <del aria-hidden="true">$270.50</del>
                                        <span class="rr-shop-new-price">Rp. {{ number_format($vendor->harga, 0,',','.')   }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rr-shop-shop-details__short-description">
                                <p>{{$vendor->keterangan}}.</p>
                            </div>
                            <div class="rr-shop-details__quantity-wrap d-flex align-items-center">
                                <div class="rr-shop-details-action__wrapper">
                                    <h6 class="rr-shop-details-action__title">Quantity</h6>
                                    <div class="rr-shop-details-price-cart d-flex align-items-center mb-30 ">
                                        <div class="rr-shop-details-cart mr-10">
                                            <div class="rr-shop-details__quantity p-relative">
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id_product" value="{{ $vendor->vendor_id }}">
                                                    <input type="hidden" name="id_user" value="{{ optional(auth()->user())->id }}">
                                                    <input type="hidden" name="quantity" value="1">

                                                    <!-- Quantity adjustment UI (optional) -->
                                                    <div class="rr-shop-details__quantity p-relative">
                                                        <div class="rr-cart-minus"><i class="fal fa-minus"></i></div>
                                                        <input type="text" id="quantity" name="quantity" value="1">
                                                        <div class="rr-cart-plus"><i class="fal fa-plus"></i></div>
                                                    </div>

                                                    <button type="submit" class="rr-card">Add to Cart</button>
                                                </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rr-shop-details__shop-info">
                            <ul class="mb-15">
                                <li>
                                    SKU:
                                    <span>printox-016</span>
                                </li>
                                <li>
                                    Categories:
                                    <span> Bags, Calendars</span>
                                </li>
                            </ul>
                            <div class="rr-shop-details__social d-flex align-items-center">
                                <span>Share:</span>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shop-details end-->


    <div class="product-details-area">
        <div class="container">
            <div class="row">
                <div class="productdetails-tabs">
                    <div class="col-xl-12 col-lg-12 col-12">
                        <div class="product-additional ">
                            <div
                                class="product-details-nav mb-40 d-flex align-items-center justify-content-center">
                                <ul class="nav nav-tabs pro-details-nav-btn " id="myTabs" role="tablist">
                                    <li class="nav-item " role="presentation">
                                        <button class="nav-links " id="home-tab-1" data-bs-toggle="tab"
                                            data-bs-target="#home-1" type="button" role="tab"
                                            aria-controls="home-1"
                                            aria-selected="false"><span>Description</span></button>
                                    </li>
                                    <li class="nav-item action" role="presentation">
                                        <button class="nav-links active" id="information-tab"
                                            data-bs-toggle="tab" data-bs-target="#additional-information"
                                            type="button" role="tab" aria-controls="additional-information"
                                            aria-selected="true"><span>Reviews (0)</span></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content tp-content-tab " id="myTabContent-2">
                                <div class="tab-para tab-pane fade" id="home-1" role="tabpanel"
                                    aria-labelledby="home-tab-1 active show">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur vulputate vestibulum Phasellus rhoncus, dolor eget viverra
                                        pretium, dolor tellus aliquet nunc, vitae ultricies erat elit eu lacus.
                                        Vestibulum non justo consectetur, cursus ante, tincidunt sapien. Nulla
                                        quis diam sit amet turpis interdum accumsan quis nec enim. Vivamus
                                        faucibus ex sed nibh egestas elementum. Mauris et bibendum dui. Aenean
                                        consequat pulvinar luctus. Suspendisse consectetur tristique tortor</p>
                                    <p>We have covered many special events such as fireworks, fairs, parades,
                                        races, walks, awards ceremonies, fashion shows, sporting events, and
                                        even a memorial service.Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus, dolor
                                        eget viverra pretium, dolor tellus aliquet nunc, vitae ultricies erat
                                        elit eu lacus. Vestibulum non justo consectetur, cursus ante, tincidunt
                                        sapien. Nulla quis diam sit amet turpis interdum accumsan quis nec enim.
                                        Vivamus faucibus ex sed nibh egestas elementum. Mauris et bibendum dui.
                                        Aenean consequat pulvinar luctus. Suspendisse consectetur</p>

                                </div>
                                <div class="tab-pane fade active show" id="additional-information"
                                    role="tabpanel" aria-labelledby="information-tab">
                                    <div class="product-details-info table-responsive">
                                        <div class="product-details-signup-form-wrapper">
                                            <div class="product-details-title-wrapper">
                                                <h3 class="product-details-title">Reviews</h3>
                                                <p>There are no reviews yet.</p>
                                                <p>Be the first to review “Cofee Mug Print” <br>
                                                    Your email address will not be published. Required fields
                                                    are marked *</p>
                                            </div>
                                            <div class="product-details-item-thumb">
                                                <div class="product-details-signup-item">
                                                    <h6>Name*</h6>
                                                    <input type="text">
                                                </div>
                                                <div class="product-details-signup-item">
                                                    <h6>Email*</h6>
                                                    <input type="email">
                                                </div>
                                                <div class="product-details-signup-item">
                                                    <div class="product-details-text mb-25">
                                                        <h6>Your Rating*</h6>

                                                        <div class="product-details-social">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <h6>Your review*</h6>
                                                    <textarea name="textarea" id="textarea" cols="30"
                                                        rows="10"></textarea>
                                                </div>
                                                <div class="product-btn">
                                                    <button class="rr-card">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- shop area start -->
  <section class="rr-shop-area pt-120 pb-80 fix">
    <div class="container">
       <div class="row gx-30">
          <div class="rr-section-title-wrapper mb-40 text-center">
             <h3 class="rr-section-title wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">Related Products</h3>
          </div>
       </div>
       <div class="row gx-30">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
             data-wow-delay=".3s">
             <div class="rr-shop-item">
                <div class="rr-shop-thumb">
                   <img src="{{asset('landing/assets/img/shop/image.jpg')}}" alt="">
                   <div class="rr-shop-cart-btn text-center">
                      <a href="shop-details.html">Add To Cart</a>
                   </div>
                </div>
                <div class="rr-shop-content text-center">
                   <h4 class="rr-shop-title"><a href="shop-details.html">Wedding Gown</a></h4>
                   <span>$380.00</span>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
             data-wow-delay=".5s">
             <div class="rr-shop-item">
                <div class="rr-shop-thumb">
                   <img src="{{asset('landing/assets/img/shop/image2.jpg')}}" alt="">
                   <div class="rr-shop-cart-btn text-center">
                      <a href="shop-details.html">Add To Cart</a>
                   </div>
                </div>
                <div class="rr-shop-content text-center">
                   <h4 class="rr-shop-title"><a href="shop-details.html">Bridal Flower</a></h4>
                   <span>$390.00</span>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
             data-wow-delay=".7s">
             <div class="rr-shop-item">
                <div class="rr-shop-thumb">
                   <img src="{{asset('landing/assets/img/shop/image3.jpg')}}" alt="">
                   <div class="rr-shop-cart-btn text-center">
                      <a href="shop-details.html">Add To Cart</a>
                   </div>
                </div>
                <div class="rr-shop-content text-center">
                   <h4 class="rr-shop-title"><a href="shop-details.html">Wedding Cake</a></h4>
                   <span>$370.00</span>
                </div>
             </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp mb-30" data-wow-duration=".9s"
             data-wow-delay=".9s">
             <div class="rr-shop-item">
                <div class="rr-shop-thumb">
                   <img src="{{asset('landing/assets/img/shop/image4.jpg')}}" alt="">
                   <div class="rr-shop-cart-btn text-center">
                      <a href="shop-details.html">Add To Cart</a>
                   </div>
                </div>
                <div class="rr-shop-content text-center">
                   <h4 class="rr-shop-title"><a href="shop-details.html">Bride’s Crown</a></h4>
                   <span>$480.00</span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- shop area end -->
</main>



<!-- Include this code where you want to display notifications -->
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif


@endsection



