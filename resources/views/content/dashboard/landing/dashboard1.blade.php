@extends('layouts.dashboard')

@section('content')
    {{-- Content --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat Datang {{ auth()->user()->name }}! 🎉</h5>
                                <p class="mb-4">
                                    Kamu bisa mengedit, data profil kamu disini.klik melihat <a href="">Transaksi</a>
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

            <div class="col-lg-12 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <form action="{{ route('user.pengguna.update', ['user' => $items->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                        value="{{ $items->name }}" />
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email"
                                        value="{{ $items->email }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" id="kecamatan" class="form-control" name="kecamatan"
                                        value="{{ $items->kecamatan }}" />
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="kabupaten" class="form-label">Kabupaten</label>
                                    <input type="text" id="kabupaten" class="form-control" name="kabupaten"
                                        value="{{ $items->kabupaten }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="no_tlfn" class="form-label">No Telepon</label>
                                    <input type="text" id="no_tlfn" class="form-control" name="no_tlfn"
                                        value="{{ $items->no_tlfn }}" />
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Kosongan Jika Tidak Ingin Diubah" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="avatar" class="form-label">Avatar</label>
                                    <input type="file" id="avatar" class="form-control" name="avatar" />
                                    @if ($items->avatar)
                                        <img src="{{ asset('paket/' . $items->avatar) }}" width="200px" height="200px"
                                            alt="Avatar">
                                    @endif
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Simpan</button>

                    </div>




                    </form>
                </div>
            </div>


    @endsection
