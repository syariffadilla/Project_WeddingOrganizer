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

                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td class="product-remove">
                                                <a href="#" class="delete-cart-item" data-id="{{ $item->id }}">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 1L1 9" stroke="#001D08" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M1 1L9 9" stroke="#001D08" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </td>

                                            <td class="product-thumbnail d-flex align-items-center">
                                                <a href="shop-details.html">
                                                    <img src="{{ asset('paket/' . $item->paket->foto1) }}" width="100px"
                                                        height="100px" alt="img">
                                                </a>
                                                <div class="product-thumbnail__wrapper">
                                                    <div class="product-name">{{ $item->paket->nama_paket }}</div>
                                                    <span class="product-size">Wajib DP</span>
                                                </div>
                                            </td>

                                            <td class="product-price"><span class="amount amount-2">Rp.
                                                    {{ number_format($item->paket->harga, 0, ',', '.') }}</span></td>


                                            <td class="product-subtotal"><span class="amount">Rp.
                                                    {{ number_format($item->paket->harga, 0, ',', '.') }}</span></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-12 col-12">
                                <div class="rr-shop-text mt-30">
                                    <div class="rr-shop-form_input d-flex mb-sm-30 mb-xs-30">
                                        <input name="name" id="name" type="text" placeholder="Enter Coupon Code">
                                        <button class="rr-card">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-12 col-12 mt-30">
                                <div class="rr-shop-box">
                                    <h4 class="rr-shop-title-box mb-20">Order Summary</h4>
                                    <div class="rr-shop-box-wrapper">
                                        <div class="rr-shop-middel-box d-flex justify-content-between ">
                                            <span>Total Semua</span>
                                            <h6>Rp. {{ number_format($total, 0, ',', '.') }}</h6>
                                        </div>
                                        <div class="rr-shop-middel-box d-flex justify-content-between">
                                            <span>Uang DP 30%</span>
                                            @php
                                                $dp = $total * 0.3; // Menghitung 30% dari total
                                            @endphp
                                            <h6>Rp. {{ number_format($dp, 0, ',', '.') }}</h6>



                                        </div>

                                    </div>

                                    <div class="rr-shop-bottom-title d-flex justify-content-between mb-30 mt-20">
                                        <h5>Total</h5>
                                        <h5>Rp. {{ number_format($total, 0, ',', '.') }}</h5>
                                    </div>
                                    <div class="rr-shop-bottom-btn d-flex">
                                        <a class="rr-shop-btn-box" href="shop.html">Keep Shopping</a>
                                        <a class="rr-shop-btn-box-2" href="{{route('checkout.user')}}">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cart end-->
    </main>
@endsection

@section('js-tambahan')
    <script>
        $(document).ready(function() {
            $('.delete-cart-item').on('click', function(e) {
                e.preventDefault();
                var itemId = $(this).data('id');
                var csrfToken = '{{ csrf_token() }}';

                $.ajax({
                    url: '/cart/' + itemId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        alert(response.message); // Tampilkan alert dengan pesan dari response
                        $('#cart-item-' + itemId)
                    .remove(); // Hapus elemen HTML dari keranjang yang dihapus
                    },
                    error: function(xhr) {
                        alert('Error deleting item.');
                        console.log(xhr);
                    }
                });
            });
        });
    </script>
@endsection
