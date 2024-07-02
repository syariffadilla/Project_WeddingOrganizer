<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/vendor-details-tabbed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 03:58:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wedding Vendor | Find The Best Wedding Vendors</title>
    <!-- Bootstrap -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template style.css')}} -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/jquery-ui.css') }}">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300'
        rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="{{ asset('landing/font-awesome/4.4.0/css/font-awesome.min.css') }}">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .hiddden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="collapse" id="searcharea">
        <!-- top search -->
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-primary" type="button">Search</button>
            </span>
        </div>
    </div>
    <!-- /.top search -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>Welcome to Wedding booked.</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                        <a href="index.html"><img src="{{ asset('landing/images/logo.png') }}" alt="Wedding bookeds"
                                class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="{{ route('utama') }}">Home</a>

                            </li>
                            <li><a href="{{ route('about') }}">About </a></li>
                            <li><a href="{{ route('utama') }}" class="scroll-link"
                                    onclick="scrollToSection('paket')">Paket</a></li>
                            <li><a href="#" class="scroll-link" data-target="vendor">Vendor</a></li>
                            {{-- <li><a href="{{ route('utama') }}" class="scroll-link"
                                    onclick="scrollToSection('paket')">Paket</a></li>
                            <li><a href="#" class="scroll-link" data-target="vendor">Vendor</a></li> --}}
                            {{-- <li><a href="venue-listing.html" title="Home" class="animsition-link">Vendor</a> --}}

                            </li>

                            @if (Auth::check())
                            <li><a href="venue-listing.html" title="Home" class="animsition-link">{{
                                    auth()->user()->name }} </a>
                                <!-- Add this link to your Blade file -->
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>



                            {{-- <li>
                                < title="Home" class="animsition-link">{{ auth()->user()->name }} | </> --}}
                                @else
                            <li><a href="{{ route('login') }}" title="Home" class="animsition-link">Login</a>
                                @endif




                            </li>

                            <li>
                                <a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false"
                                    aria-controls="searcharea"> <i class="fa fa-search"></i> </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="tp-page-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <h1>Detail Paket {{ $paket->nama_paket }}</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('utama') }}">Home</a></li>
                        <li class="active"> Detail Paket</li>
                        <li class="active">{{ $paket->nama_paket }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container tabbed-page st-tabs">
            <div class="row tab-page-header">
                <div class="col-md-8 title"> <a href="#" class="label-primary">Weeding Booked</a>
                    <h1>{{ $paket->nama_paket }}</h1>
                    <p class="location"><i class="fa fa-map-marker"></i>Indonesia</p>
                    <hr>
                </div>
                <div class="col-md-4 venue-data">
                    <div class="venue-info">
                        <!-- venue-info-->
                        <div class="capacity">
                            <div>Kapasitas:</div>
                            <span class="cap-people"> </span>
                        </div>
                        <div class="pricebox">
                            <div>Harga :</div>
                            <span class="price">Rp. {{ number_format($paket->harga, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <a href="#inquiry" class="btn btn-default btn-lg btn-block">Book Venue</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#photo" title="Gallery" aria-controls="photo" role="tab" data-toggle="tab"> <i
                                    class="fa fa-photo"></i> <span class="tab-title">Photo</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#about" title="about info" aria-controls="about" role="tab" data-toggle="tab">
                                <i class="fa fa-info-circle"></i>
                                <span class="tab-title">About</span>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#video" title="Video" aria-controls="video" role="tab" data-toggle="tab"> <i
                                    class="fa fa-youtube-play"></i> <span class="tab-title">Video</span></a>
                        </li>

                        <li role="presentation">
                            <a href="#reviews" title="Review" aria-controls="reviews" role="tab" data-toggle="tab"> <i
                                    class="fa fa-commenting"></i> <span class="tab-title">Reviews</span></a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- tab content start-->
                        <div role="tabpanel" class="tab-pane fade in active" id="photo">
                            <div id="sync1" class="owl-carousel">
                                @if ($paket->foto1 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto1) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto2 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto2) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto3 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto3) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto4 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto4) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto5 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto5) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto6 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto6) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                            </div>
                            <div id="sync2" class="owl-carousel">
                                @if ($paket->foto1 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto1) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto2 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto2) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto3 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto3) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto4 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto4) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto5 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto5) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                                @if ($paket->foto6 != null)
                                <div class="item"> <img src="{{ asset('paket/' . $paket->foto6) }}" alt=""
                                        class="img-responsive"> </div>
                                @endif
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="about">
                            <div class="venue-details">
                                <h2>Paket Detail</h2>
                                <p>{{ $paket->keterangan }}.</p>

                                <h2>Venue Facilities</h2>
                                <ul class="check-circle list-group">
                                    @if ($paket->include1 != null)
                                    <li class="list-group-item">{{ $paket->include1 }}</li>
                                    @endif
                                    @if ($paket->include2 != null)
                                    <li class="list-group-item">{{ $paket->include2 }}</li>
                                    @endif
                                    @if ($paket->include3 != null)
                                    <li class="list-group-item">{{ $paket->include3 }}</li>
                                    @endif
                                    @if ($paket->include4 != null)
                                    <li class="list-group-item">{{ $paket->include4 }}</li>
                                    @endif
                                    @if ($paket->include5 != null)
                                    <li class="list-group-item">{{ $paket->include5 }}</li>
                                    @endif
                                    @if ($paket->include6 != null)
                                    <li class="list-group-item">{{ $paket->include6 }}</li>
                                    @endif
                                    @if ($paket->include7 != null)
                                    <li class="list-group-item">{{ $paket->include7 }}</li>
                                    @endif
                                    @if ($paket->include8 != null)
                                    <li class="list-group-item">{{ $paket->include8 }}</li>
                                    @endif
                                    @if ($paket->include9 != null)
                                    <li class="list-group-item">{{ $paket->include9 }}</li>
                                    @endif
                                    @if ($paket->include10 != null)
                                    <li class="list-group-item">{{ $paket->include10 }}</li>
                                    @endif
                                    @if ($paket->include11 != null)
                                    <li class="list-group-item">{{ $paket->include11 }}</li>
                                    @endif
                                    @if ($paket->include12 != null)
                                    <li class="list-group-item">{{ $paket->include12 }}</li>
                                    @endif
                                    @if ($paket->include13 != null)
                                    <li class="list-group-item">{{ $paket->include13 }}</li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="onmap">
                            <div id="googleMap" class="map"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="video">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/YbeTfxbHvvw?si=sWfnQU3sIMqHc1QG"
                                    allowfullscreen></iframe>
                            </div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                            <!-- comments -->
                            <div class="customer-review">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1>Couples Review</h1>
                                        <div class="review-list">
                                            <!-- First Comment -->
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                    <div class="user-pic"> <img class="img-responsive img-circle"
                                                            src="images/userpic.jpg" alt=""> </div>
                                                </div>
                                                <div class="col-md-10 col-sm-10">
                                                    <div class="panel panel-default arrow left">
                                                        <div class="panel-body">
                                                            <div class="text-left">
                                                                <h3>The whole experience was Excellent</h3>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </div>
                                                            <div class="review-post">
                                                                <p> From initially being shown round through booking to
                                                                    breakfast the next morning. Nam eu enim mollis urna
                                                                    egestas interdum eget quis nisl. Ut sem velit,
                                                                    scelerisque nec commodo consequat, imperdiet non
                                                                    diam. </p>
                                                            </div>
                                                            <div class="review-user">By <a href="#">Jaisy and
                                                                    Kartin</a>, on <span class="review-date"></span>04
                                                                Apr 2015</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Second Comment -->
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                    <div class="user-pic"> <img class="img-responsive img-circle"
                                                            src="images/userpic.jpg" alt=""> </div>
                                                </div>
                                                <div class="col-md-10 col-sm-10">
                                                    <div class="panel panel-default arrow left">
                                                        <div class="panel-body">
                                                            <div class="text-left">
                                                                <h3>The Facilities were Fantastic!</h3>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </div>
                                                            <div class="review-post">
                                                                <p> Curabitur mattis congue consectetur. Nulla facilisis
                                                                    dictum velit, ultrices imperdiet diam luctus quis.
                                                                    Vestibulum in volutpat purus, quis accumsan diam.
                                                                    The pastry heart on the pie was such a lovely touch
                                                                    that you could easily not have done. </p>
                                                            </div>
                                                            <div class="review-user">By <a href="#">Jaisy and
                                                                    Kartin</a>, on <span class="review-date"></span>04
                                                                Apr 2015</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Third Comment -->
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                    <div class="user-pic"> <img class="img-responsive img-circle"
                                                            src="images/userpic.jpg" alt=""> </div>
                                                </div>
                                                <div class="col-md-10 col-sm-10">
                                                    <div class="panel panel-default arrow left">
                                                        <div class="panel-body">
                                                            <div class="text-left">
                                                                <h3> Aenean elementum dictum estsit amet ullamcorper
                                                                </h3>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </div>
                                                            <div class="review-post">
                                                                <p> Vivamus condimentum orci non tellus tincidunt
                                                                    volutpat. Suspendisse gravida gravida arcu a
                                                                    pellentesque. Duis aliquet ut justo et accumsan.
                                                                </p>
                                                            </div>
                                                            <div class="review-user">By <a href="#">Jaisy and
                                                                    Kartin</a>, on <span class="review-date"></span>04
                                                                Apr 2015</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review"> <a class="btn tp-btn-primary btn-block tp-btn-lg"
                                                role="button" data-toggle="collapse" href="#review"
                                                aria-expanded="false" aria-controls="review"> Write A Review </a>
                                        </div>
                                        <div class="collapse review-list review-form" id="review">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <h1>Write Your Review</h1>
                                                    <form class="">
                                                        <div class="rating-group">
                                                            <div class="radio radio-success radio-inline">
                                                                <input type="radio" name="radio1" id="radio1"
                                                                    value="option2">
                                                                <label for="radio1" class="radio-inline"> <span
                                                                        class="rating"><i class="fa fa-star"></i></span>
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success radio-inline">
                                                                <input type="radio" name="radio1" id="radio2"
                                                                    value="option3">
                                                                <label for="radio2" class="radio-inline"> <span
                                                                        class="rating"><i class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i></span> </label>
                                                            </div>
                                                            <div class="radio radio-success radio-inline">
                                                                <input type="radio" name="radio1" id="radio3"
                                                                    value="option3">
                                                                <label for="radio3" class="radio-inline"> <span
                                                                        class="rating"><i class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i></span> </label>
                                                            </div>
                                                            <div class="radio radio-success radio-inline">
                                                                <input type="radio" name="radio1" id="radio4"
                                                                    value="option4">
                                                                <label for="radio4" class="radio-inline"> <span
                                                                        class="rating"><i class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i></span> </label>
                                                            </div>
                                                            <div class="radio radio-success radio-inline">
                                                                <input type="radio" name="radio1" id="radio5"
                                                                    value="option5">
                                                                <label for="radio5" class="radio-inline"> <span
                                                                        class="rating"><i class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i><i
                                                                            class="fa fa-star"></i></span> </label>
                                                            </div>
                                                        </div>
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class=" control-label" for="name">Name</label>
                                                            <div class="">
                                                                <input id="name" name="name" type="text"
                                                                    placeholder="Name" class="form-control input-md"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class=" control-label" for="email">E-Mail</label>
                                                            <div class=" ">
                                                                <input id="email" name="email" type="text"
                                                                    placeholder="E-Mail" class="form-control input-md"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class=" control-label" for="reviewtitle">Review
                                                                Title</label>
                                                            <div class=" ">
                                                                <input id="reviewtitle" name="reviewtitle" type="text"
                                                                    placeholder="Review Title"
                                                                    class="form-control input-md" required>
                                                            </div>
                                                        </div>
                                                        <!-- Textarea -->
                                                        <div class="form-group">
                                                            <label class=" control-label">Write Review</label>
                                                            <div class="">
                                                                <textarea class="form-control"
                                                                    rows="8">Write Review</textarea>
                                                            </div>
                                                        </div>
                                                        <!-- Button -->
                                                        <div class="form-group">
                                                            <button name="submit"
                                                                class="btn tp-btn-default tp-btn-lg">Submit
                                                                Review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab content start-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="side-box" id="inquiry">
                        <h2>Booking Untuk Paket ini !</h2>
                        <p>Note : Booking Akan Diminta DP untuk tanda jadi!.</p>

                        <form class="" action="{{ route('user.booking') }}" method="POST">
                            @csrf

                            <!-- Text input-->
                            <div id="selectedVendorsContainer"></div>
                             <input type="hidden" id="selectedVendorIds" name="selectedVendorIds">
                             <input type="hidden" id="paket_id"  name="paket_id" value="{{ $paket->paket_id }}">

                            <div class="form-group">
                                <label class="control-label" for="name-one">Name:<span class="required">*</span></label>
                                <div class="">
                                    @if (Auth::check())
                                    <input id="name" name="name" type="text" value="{{ Auth::user()->name }}"
                                        class="form-control input-md" required>
                                    @else
                                    <input id="name" name="name" type="text" placeholder="Name"
                                        class="form-control input-md" required>
                                    @endif

                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="phone">Phone (Whatsapp) :<span
                                        class="required">*</span></label>
                                <div class="">
                                    @if (Auth::check())
                                    <input id="phone" name="phone" type="text" value="{{ Auth::user()->no_tlfn }}"
                                        class="form-control input-md" required>
                                    <span class="help-block"> </span>
                                </div>
                                @else
                                <input id="phone" name="phone" type="text" placeholder="Phone"
                                    class="form-control input-md" required>
                                <span class="help-block"> </span>
                            </div>
                            @endif

                    </div>

                    <!-- Select Basic -->
                    <div class="default-calender">
                        <div class="form-group">
                            <label class="control-label" for="weddingdate">Wedding Date<span
                                    class="required">*</span></label>
                            <div class="">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tanggal_booking" id="weddingdate" placeholder="Wedding Date">
                                    <span class="input-group-addon" id="basic-addon2"><i
                                            class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="phone">Alamat :<span class="required">*</span></label>
                        <div class="">
                            @if (Auth::check())
                            <textarea class="form-control" id="description" name="alamat" rows="6" cols="12"></textarea>
                            <span class="help-block"> </span>
                        </div>
                        @else
                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md"
                            required>
                        <span class="help-block"> </span>
                    </div>
                    @endif

                </div>
                <div class="form-group">
                    <label class="control-label" for="phone">Catatan Untuk Admin :</label>
                    <div class="">
                        @if (Auth::check())
                        <textarea class="form-control" id="description" name="catatan" rows="6" cols="12"></textarea>
                        <span class="help-block"> </span>
                    </div>
                    @else
                    <input id="phone" name="phone" type="text" placeholder="Catatan" class="form-control input-md"
                        required>
                    <span class="help-block"> </span>
                </div>
                @endif
                <a id="tambahVendorBtn">+ Tambah Vendor</a>

            </div>

            <div class="col-md-12 hiddden" id="vendorList">
                <div class="row">
                    @foreach ($vendor as $vr)

                    <div class="col-md-4 vendor-box">
                        <!-- venue box start-->
                        <div class="vendor-image">
                            <!-- venue pic -->
                            <a href="#"><img src="{{ asset('vendor/'. $vr->foto) }}" alt="wedding venue"
                                    class="img-responsive"></a>
                            <div class="popular-label"></div>
                            <div class="favourite-bg"><a href="#" class="love-button"
                                onclick="loveVendor({{ $vr->id }}, '{{ $vr->nama_vendor }}')">
                                <i class="fa fa-heart"></i>
                            </a></div>
                        </div>
                        @php
                            $vndr = 1;
                        @endphp
                        <!-- /.venue pic -->
                        <div class="vendor-detail">
                            <!-- venue details -->
                            <div class="caption">
                                <!-- caption -->
                                <h2><a href="#" class="title">{{ $vr->nama_vendor }}</a></h2>
                                <p class="location"><i class="fa fa-map-marker"></i> {{ $vr->alamat }}</p>
                                <p class="location"></i> {{ $vr->keterangan }}</p>

                                <div class="rating">
                                    <input type="checkbox" name="selectedVendorIds[]" id="checkbox-{{ $vndr }}" value="{{ $vr->vendor_id }}" class="styled">
                                    <label for="checkbox-{{ $vndr }}" class="control-label"> Pilih Vendor </label>
                                </div>
                            </div>
                            <!-- /.caption -->
                            <div class="vendor-price">

                                <div class="price">Rp. {{ number_format($vr->harga, 0,',','.') }} ',</div>
                            </div>
                        </div>
                        <!-- venue details -->

                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-md-12 text-center"> <a href="#" class="btn btn-primary">View More</a> </div>
                </div>
            </div>


            <!-- Multiple Radios -->
            <div class="form-group">
                <label class="control-label">Ceklis Dibawah ini !</label>
                <div class="checkbox checkbox-success">
                    <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                    <label for="checkbox-0" class="control-label"> Saya bersedia membayar DP ! </label>
                </div>

            </div>
            <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Book My Wedding now</button>
            </div>
            </form>
        </div>
    </div>


    </div>
    </div>
    </div>




    <div class="footer">
        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 ft-aboutus">
                    <h2>Wedding.Vendor</h2>
                    <p>At Wedding Vendor our purpose is to help people find great online network connecting wedding
                        suppliers and wedding couples who use those suppliers. <a href="#">Start Find Vendor!</a>
                    </p>
                    <a href="#" class="btn btn-default">Find a Vendor</a>
                </div>
                <div class="col-md-3 ft-link">
                    <h2>Useful links</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-4 newsletter">
                    <h2>Subscribe for Newsletter</h2>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter E-Mail Address" required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Submit</button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <!-- /.col-lg-6 -->
                    </form>
                    <div class="social-icon">
                        <h2>Be Social &amp; Stay Connected</h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Footer -->
    <div class="tiny-footer">
        <!-- Tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">Copyright © 2014. All Rights Reserved</div>
            </div>
        </div>
    </div>
    <!-- Your JavaScript code -->
    <script>
        function scrollToSection(sectionId) {
        // Find the target section by its ID
        var targetSection = document.getElementById(sectionId);

        // Scroll to the target section smoothly
        if (targetSection) {
            targetSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
    </script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    var selectedVendorIds = [];

    function addToForm(vendorId, vendorName) {
        // Update the array of selected vendor IDs
        selectedVendorIds.push(vendorId);

        // Update the hidden input field with the selected vendor IDs
        document.getElementById("selectedVendorIds").value = selectedVendorIds.join(",");

        // Add a new input field to display the selected vendor
        var selectedVendorsContainer = document.getElementById("selectedVendorsContainer");
        var newInput = document.createElement("input");
        newInput.setAttribute("type", "text");
        newInput.setAttribute("value", vendorName);
        newInput.setAttribute("readonly", true);
        selectedVendorsContainer.appendChild(newInput);

        // Add a separator (comma) between vendors
        var separator = document.createElement("span");
        separator.textContent = ", ";
        selectedVendorsContainer.appendChild(separator);
    }

    function loveVendor(vendorId, vendorName) {
        // Check if the vendor is already loved
        if (!selectedVendorIds.includes(vendorId)) {
            // If not, add it to the form
            addToForm(vendorId, vendorName);
        }
    }

    var tambahVendorBtn = document.getElementById("tambahVendorBtn");
    var vendorList = document.getElementById("vendorList");


    var loveButtons = document.querySelectorAll('.love-button');
    loveButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            var vendorId = button.getAttribute('data-vendor-id');
            var vendorName = button.getAttribute('data-vendor-name');
            loveVendor(vendorId, vendorName);
        });
    });
});

</script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        var tambahVendorBtn = document.getElementById("tambahVendorBtn");
        var vendorList = document.getElementById("vendorList");

        if (tambahVendorBtn) {
            tambahVendorBtn.addEventListener("click", function () {
                // Toggle the visibility of the vendor list
                if (vendorList.classList.contains("hiddden")) {
                    vendorList.classList.remove("hiddden");
                } else {
                    vendorList.classList.add("hiddden");
                }
            });
        }
    });
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('landing/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <!-- Flex Nav Script -->
    <script src="{{ asset('landing/js/jquery.flexnav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('landing/js/navigation.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/thumbnail-slider.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('landing/js/header-sticky.js') }}"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter = new google.maps.LatLng(23.0203458, 72.5797426);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,

                icon: 'images/pinkball.png'
            });

            marker.setMap(map);
            var infowindow = new google.maps.InfoWindow({
                content: "Hello Address"
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script src="{{ asset('code.jquery.com/ui/1.12.0/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('landing/js/price-slider.js') }}"></script>
    <script>
        $(function() {
            $("#weddingdate").datepicker();
        });
    </script>
</body>


<!-- Mirrored from jituchauhan.com/wedding/wedding-new/vendor-details-tabbed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 03:58:09 GMT -->

</html>
