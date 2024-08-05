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
                                <h3 class="breadcrumb__title">Checkout</h3>
                            </div>
                            <div class="breadcrumb__list">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                                <span>Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!--Checkout start-->
        <section class="rr-checkout-area pb-120 pt-120" data-bg-color="#EFF1F5"
            style="background-color: rgb(239, 241, 245);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="rr-checkout-bill-area">
                            <h3 class="rr-checkout-bill-title">Billing Details</h3>

                            <div class="rr-checkout-bill-form">
                                <form action="{{ route('user.booking') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="rr-checkout-bill-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="rr-checkout-input">
                                                    <label>First Name <span>*</span></label>
                                                    <input type="text" placeholder="Nama"
                                                        value="{{ Auth::user()->name }}" name="name">

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="rr-checkout-input">
                                                    <label>alamat</label>
                                                    <input type="text" placeholder="Alamat"
                                                        value="{{ Auth::user()->alamat }}" name="alamat">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rr-checkout-input">
                                                    <label>Whatsaap</label>
                                                    <input type="text" placeholder="Whatsaap"
                                                        value="{{ Auth::user()->no_tlfn }}" name="Whatsaap">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rr-checkout-input">
                                                    <label for="bookingDate">Tanggal Booking</label>
                                                    <input type="date" id="bookingDate" name="booking_date">
                                                    <p id="dateAvailability"></p>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="rr-checkout-input">
                                                    <label>Kota / Kab</label>
                                                    <input type="text" placeholder="Kota / Kab" name="kota" value="{{ Auth::user()->kabupaten }}">


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rr-checkout-input">
                                                    <label>Kecmatan</label>
                                                    <input type="text" placeholder="Kecmatan" name="kecamatan" value="{{ Auth::user()->kecamatan }}">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="rr-checkout-input">
                                                    <label>Email address <span>*</span></label>
                                                    <input type="email" readonly name="email"
                                                        value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="rr-checkout-input">
                                                    <label>Catatan Untuk Pesanan</label>
                                                    <textarea placeholder="Notes about your order, e.g. special notes for delivery." name="catatan"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- checkout place order -->
                        <div class="rr-checkout-place white-bg">
                            <h3 class="rr-checkout-place-title">Your Order</h3>

                            <div class="rr-order-info-list">
                                <ul>

                                    <!-- header -->
                                    <li class="rr-order-info-list-header">
                                        <h4>Product</h4>
                                        <h4>Total</h4>
                                    </li>

                                    @foreach ($cart as $item)
                                    @if ($item->paket)
                                        <!-- item list -->
                                        <li class="rr-order-info-list-desc">
                                            <p> {{ $item->paket->nama_paket }} <span> x 1</span></p>
                                            <span>Rp. {{ number_format($item->paket->harga, 0, ',', '.') }}</span>
                                        </li>
                                        <input type="hidden" name="paket_id" value="{{ $item->paket->paket_id }}">
                                    @else
                                        <!-- item list -->
                                        <li class="rr-order-info-list-desc">
                                            <p> Nama Paket Tidak Tersedia <span> x 1</span></p>
                                            <span>Rp. 0</span>
                                        </li>
                                        <input type="hidden" name="paket_id" value="">
                                    @endif
                                @endforeach

                                <!-- subtotal -->
                                <li class="rr-order-info-list-subtotal">
                                    <span>Subtotal</span>
                                    <span>Rp. {{ number_format($total, 0, ',', '.') }}</span>
                                </li>

                                    <!-- shipping -->
                                    <li class="rr-order-info-list-shipping">
                                        <span>Biaya Layanan</span>
                                        <div class="rr-order-info-list-shipping-item d-flex flex-column align-items-end">
                                            <span>

                                                <label for="flat_rate">Biaya Layanan: <span>Rp. 15.000</span></label>
                                            </span>

                                        </div>
                                    </li>

                                    @php
                                        $totalSemua = $total + 15000;

                                        $DP = $totalSemua * 0.3;
                                    @endphp
                                    <!-- total -->
                                    <li class="rr-order-info-list-total">
                                        <span>Total</span>
                                        <span>Rp. {{ number_format($totalSemua, 0, ',', '.') }}</span>
                                    </li>
                                    <li class="rr-order-info-list-total">
                                        <span>DP 30%</span>


                                        <span>Rp. {{ number_format($DP, 0, ',', '.') }}</span>
                                    </li>

                                </ul>
                            </div>
                            <div class="rr-checkout-payment">
                                <div class="rr-checkout-payment-item">
                                    <input type="radio" id="back_transfer" name="bank"
                                        value="BCA 268102869 A.N SAAH">
                                    <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Direct Bank Transfer
                                        | </label>
                                    <label for="back_transfer" data-bs-toggle="direct-bank-transfer">BCA 268102869 A.N
                                        SAAH</label>
                                    <div class="rr-checkout-payment-desc direct-bank-transfer">
                                    </div>
                                </div>
                                <div class="rr-checkout-payment-item">
                                    <input type="radio" id="back_transfer" name="bank"
                                        value="BRI 268102869 A.N SAAH">
                                    <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Direct Bank Transfer
                                        | </label>
                                    <label for="back_transfer" data-bs-toggle="direct-bank-transfer">BRI 268102869 A.N
                                        SAAH</label>
                                    <div class="rr-checkout-payment-desc direct-bank-transfer">
                                    </div>
                                </div>

                                <div class="rr-checkout-payment-item">
                                    <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Upload Bukti Transfer
                                    </label>


                                        <input type="file" id="back_transfer" name="butki_tf" accept="image/*">

                                    <div id="preview"></div>


                                </div>

                            </div>
                            <div class="rr-checkout-agree">
                                <div class="rr-checkout-option">
                                    <input id="read_all" type="checkbox">
                                    <label for="read_all">I have read and agree to the website.</label>
                                </div>
                                <p id="agreeMessage" style="display: none; color: red;">You must agree to the terms.</p>
                            </div>
                            <div class="rr-checkout-btn-wrapper">
                                <button type="submit" class="rr-checkout-btn w-100" >Place Order</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Checkout end-->
    </main>
@endsection

@section('js-tambahan')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const bookingDateInput = document.getElementById("bookingDate");
            const dateAvailabilityMessage = document.getElementById("dateAvailability");

            bookingDateInput.addEventListener("change", function() {
                const selectedDate = this.value;

                // Kirim permintaan AJAX untuk memeriksa ketersediaan tanggal
                $.ajax({
                    url: "{{ route('check.date.availability') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}", // Diperlukan untuk Laravel CSRF Protection
                        booking_date: selectedDate
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.available) {
                            dateAvailabilityMessage.textContent = "Tanggal tersedia.";
                            bookingDateInput.disabled = false; // Aktifkan kembali input tanggal jika tersedia
                        } else {
                            dateAvailabilityMessage.textContent = "Tanggal sudah dipesan. Silakan pilih tanggal lain.";
                            bookingDateInput.disabled = false; // Nonaktifkan input tanggal jika tidak tersedia
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error AJAX:', status, '-', error);
                        console.log('Response:', xhr.responseText);
                        dateAvailabilityMessage.textContent = "Terjadi kesalahan. Coba lagi nanti.";
                    }
                });
            });
        });
    </script>
@endsection
