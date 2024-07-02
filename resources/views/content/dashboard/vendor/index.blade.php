@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> vendor</h4>

            <!-- Bordered Table -->
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Data vendor</h5>
                    </div>
                    <div class="col-6">
                        <h5 class="text-end card-header"><button type="button" class="btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#exLargeModal">Tambah vendor</button></h5>
                    </div>

                    @include('content.dashboard.vendor.tambah')

                </div>

                <div class="card-body">


                        <div class="table-responsive text-nowrap">
                            @if ($vendor->isEmpty())
                                <div class="text-center my-2"><i>Data Kosong</i></div>
                            @else
                                <table class="table table-bordered mb-3">
                                    <thead class="mt-3">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Nama Paket</th>
                                            <th>Harga</th>
                                            <th>No Hp</th>
                                            <th>Alamat</th>
                                            <th>Keterangan</th>
                                            <th>Foto</th>


                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @php
                                        $no = 1;
                                    @endphp --}}
                                        @foreach ($vendor as $index => $item)
                                            <tr>
                                                <td class="col-1 text-center">{{ $index + $vendor->firstItem() }}</td>
                                                <td>{{ $item->nama_vendor }}</td>
                                                <td>Rp. {{ number_format($item->harga, 0, ',', '.') }} ,-</td>
                                                <td>{{ $item->no_tlp }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ Str::limit($item->keterangan, 100) }}</td>
                                                {{-- <td> {{ $item->suka }} </td> --}}
                                                <td class="text-center"><img src="{{ asset('vendor/' . $item->foto) }}"
                                                        alt="{{ $item->nama_vendor }}" width="200px" height="100px">
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                                data-bs-target="#editModalKat{{ $item->vendor_id }}"><i
                                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                                data-bs-target="#hapusModalProd{{ $item->vendor_id }}"><i
                                                                    class="bx bx-trash me-1"></i> Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            @include('content.dashboard.vendor.edit')
                                            @include('content.dashboard.vendor.hapus')
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                            <br>

                            <div>
                                {{ $vendor->links() }}
                            </div>


                        </div>
                    </div>


            </div>
            <!--/ Bordered Table -->

        </div>
    </div>

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




@endsection

@section('js')
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script> --}}
@endsection
@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css"> --}}
@endsection
