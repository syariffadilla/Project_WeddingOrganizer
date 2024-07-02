@extends('layouts.landing')

@section('main')

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
                            <h3 class="breadcrumb__title">Wishlist</h3>
                        </div>
                        <div class="breadcrumb__list">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                            <span>Wishlist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!--cart start-->
    <section class="cart-area pt-120 pb-120">
        <div class="container container-small">
            <div class="row">
                <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price"> Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove">
                                        <a href="#">
                                        <svg width="10" height="10"
                                                viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 1L1 9" stroke="#001D08" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 1L9 9" stroke="#001D08" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </a>
                                    </td>
                                    <td class="product-thumbnail d-flex align-items-center">
                                        <a href="shop-details.html">
                                            <img src="assets/img/shop/cart-img.jpg" alt="img">
                                        </a>
                                        <div class="product-thumbnail__wrapper">
                                            <div class="product-name">Bridal Flower</div>
                                            <span class="product-size">Color Burly Wood; Size M <br/> Print Custom</span>
                                        </div>
                                    </td>

                                    <td class="product-price"><span class="amount amount-2">$230.50</span></td>

                                    <td class="product-quantity-2 text-center">
                                        <div class="rr-shop-details__quantity-2 p-relative">
                                            <span class="rr-shop-minus"><i class="far fa-minus"></i></span>
                                            <input type="text" value="1">
                                            <span class="rr-shop-plus"><i class="far fa-plus"></i></span>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$230.50</span></td>
                                </tr>
                                <tr>
                                    <td class="product-remove">
                                        <a href="#">
                                        <svg width="10" height="10"
                                                viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 1L1 9" stroke="#001D08" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M1 1L9 9" stroke="#001D08" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </a>
                                    </td>
                                    <td class="product-thumbnail d-flex align-items-center">
                                        <a href="shop-details.html">
                                            <img src="assets/img/shop/cart-img01.jpg" alt="img">
                                        </a>
                                        <div class="product-thumbnail__wrapper">
                                            <div class="product-name">Wedding White Shoes</div>
                                            <span class="product-size">Color Black; Size M <br/>
                                                Print Custom</span>
                                        </div>
                                    </td>

                                    <td class="product-price"><span class="amount amount-2">$230.50</span></td>

                                    <td class="product-quantity-2 text-center">
                                        <div class="rr-shop-details__quantity-2 p-relative">
                                            <span class="rr-shop-minus"><i class="far fa-minus"></i></span>
                                            <input type="text" value="1">
                                            <span class="rr-shop-plus"><i class="far fa-plus"></i></span>
                                        </div>
                                    </td>
                                     <td class="product-subtotal"><span class="amount">$230.50</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    <!--cart end-->
</main>


@endsection