<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.rrdevs.net/brulloft/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 13:23:46 GMT -->

<head>
    <meta charset="utf-8">
    <title>PASW – Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/main.css') }}">

    @yield('css-tambahan')
</head>

<body>

    <!-- preloader start -->
    <div id="loading">
        <div class="preloader-close">x</div>
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    <!-- preloader start -->


    @include('layouts.landing.navbar')

    @yield('main')

    @include('layouts.landing.footer')



    @yield('js-tambahan')


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Fungsi untuk memperbarui jumlah item dalam keranjang
            function updateCartItemCount() {
                $.ajax({
                    url: "http://localhost:8000/cart/count",
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        $('#cartItemCount').text(response.totalItems);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error AJAX:', status, '-', error);
                        console.log('Response:', xhr.responseText); // Log respon lengkap untuk debugging
                    }
                });
            }

            // Panggil fungsi untuk pertama kali saat halaman dimuat
            updateCartItemCount();

            // Set interval untuk melakukan polling setiap 10 detik (sesuaikan interval sesuai kebutuhan)
            setInterval(updateCartItemCount, 10000); // Interval 10 detik
        });
    </script>

    <!-- Sisanya dari skrip JavaScript Anda -->
    <script src="{{ asset('landing/assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('landing/assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('landing/assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('landing/assets/js/slick.js') }}"></script>
    <script src="{{ asset('landing/assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('landing/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('landing/assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('landing/assets/js/wow.js') }}"></script>
    <script src="{{ asset('landing/assets/js/smooth-scroll.js') }}"></script>
    <script src="{{ asset('landing/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('landing/assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('landing/assets/js/main.js') }}"></script>

</body>


</html>
