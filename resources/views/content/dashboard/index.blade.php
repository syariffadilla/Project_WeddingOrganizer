@extends('layouts.dashboard')

@section('content')
    {{-- Content --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-6 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat Datang {{ auth()->user()->name }}! 🎉</h5>
                                <p class="mb-4">
                                    Kamu bisa menambah, mengupdate jumlah data produk dan mengecek penjualanmu disini.
                                </p>

                                {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('assets/assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="user">
                                            <path fill="#6563FF"
                                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                            <a class="dropdown-item" href="">Detail</a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Jumlah Admin</span>
                                <h3 class="card-title mb-2">{{$admin}}</h3>
                                {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="{{ asset('assets/assets/img/icons/unicons/chart-success.png') }}"
                                            alt="CreditCard" class="rounded" />
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                            <a class="dropdown-item" href="">Detail</a>
                                            {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                        </div>
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Jumlah Pelanggan</span>
                                <h3 class="card-title text-nowrap mb-1">{{$pelanggan}}</h3>
                                {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Order Statistics -->
            {{-- <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Penjualan</h5>
                            <small class="text-muted">{{ number_format($Hitung_total / 1000, 2) }}k Total Penjualan</small>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/assets/img/icons/unicons/paypal.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="">Detail</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Paket</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $paket }}</h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/assets/img/icons/unicons/chart.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="">Detail</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Booking</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $booking }}</h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/assets/img/icons/unicons/wallet-info.png') }}"
                                    alt="Credit Card" class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="">Detail</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Vendor</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $vendor }}</h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- Order Statistics -->
            {{-- <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Penjualan</h5>
                            <small class="text-muted">{{ number_format($Hitung_total / 1000, 2) }}k Total Penjualan</small>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/assets/img/icons/unicons/cc-success.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="">Detail</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Total Keuangan</span>
                        <h3 class="card-title text-nowrap mb-1">Rp.00</h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/assets/img/icons/unicons/wallet.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="">Detail</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Booking Konfirmasi</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $bookingKonfirmasi }}</h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/assets/img/icons/unicons/wallet.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="">Detail</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Booking Pending</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $bookingPending }} </h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/assets/img/icons/unicons/wallet.png') }}" alt="Credit Card"
                                    class="rounded" />
                            </div>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                    <a class="dropdown-item" href="">Detail</a>
                                    {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                                </div>
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Booking Tolak</span>
                        <h3 class="card-title text-nowrap mb-1">{{ $bookingTolak }} </h3>
                        {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-12 mb-4">
                <hr class="my-2" />

                <!-- Bordered Table -->
                <div class="card">
                    <h5 class="card-header">Data Booking</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pemesan</th>
                                        <th>Nama Paket</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($bookingData as $bo)


                                                                  <tr>
                                                                    <td>{{ $no++ }}</td>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{ $bo->user->name ?? '-' }}</strong>
                                        </td>
                                        <td>{{ $bo->paket ? $bo->paket->nama_paket : '' }}</td>


                                        <td>
                                            @if($bo->status == 1)

                                            <span class="badge bg-label-warning me-1">Pending</span>
                                            @else
                                            <span class="badge bg-label-primary me-1">Konfirmasi</span>

                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/ Bordered Table -->
            </div>


        </div>
    @endsection
