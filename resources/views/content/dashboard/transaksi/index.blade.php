@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span><span
                    class="text-muted fw-light">Transaksi/</span>Data Transaksi </h4>

            <!-- Bordered Table -->
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Data Transaksi<Table></Table>
                        </h5>
                    </div>
                    <div class="col-6">
                        <h5 class="text-end card-header"> <button type="button" class="btn btn-sm btn-primary"
                                data-bs-toggle="modal" data-bs-target="#CariTransaksi">
                                Cari Transaksi
                            </button>
                        </h5>
                    </div>


                    {{-- @include('contents.dashboard.transaksi.cariTransaksi') --}}
                    {{-- <div>
                <label for="html5-search-input" class="text-end">Search</label>
                        <div class="col-3 float-end pr-4">
                          <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                        </div>
                    </div> --}}
                </div>

                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @if ($booking->isEmpty())
                            <div class="text-center my-2"><i>Data Kosong</i></div>
                        @else
                            <table class="table table-bordered mb-3">
                                <thead class="mt-3">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Pembeli</th>
                                        <th>User</th>
                                        <th>Paket</th>
                                        <th>Harga</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="col-1 text-center">{{ $no++ }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->paket->nama_paket }}</td>
                                            <td>Rp {{ number_format($item->paket->harga, 0, ',', '.') }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    Belum Dikonfirmasi
                                                @elseif ($item->status == 2)
                                                    Sudah Dikonfirmasi
                                               @elseif ($item->status == 3)
                                                    Ditolak
                                                @endif


                                            </td>
                                            <td>{{ $item->catatan ?: '-' }} </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editModalKat{{ $item->booking_id }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <i class="bx bx-edit-alt me-1"></i> Konfirmasi</a>
                                                        <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#HapusTransaksi{{ $item->id }}"><i
                                                                class="bx bx-trash me-1"></i> Hapus</a>
                                                                <a class="dropdown-item"
                                                                href="https://api.whatsapp.com/send?phone={{  $item->user->no_tlfn  }}&text=
                                                                Selamat Saya dari admin Booked Weeding Ingin memberi tahu bahwa pesanan anda dengan data:%0A
                                                                No Transaksi: {{ $item->invoice }}%0A
                                                                Alamat: {{ $item->user->alamat }}%0A
                                                                Nama Pembeli: {{ $item->user->name }}%0A
                                                                Jumlah Bayar: Rp {{ number_format($item->total_transaksi, 0, ',', '.') }}%0A
                                                                Nama Product: {{ $item->paket->nama_paket ? $item->paket->nama_paket : 'Product Not Found' }}%0A
                                                                Status: @if ($item->status == 1)
                                                                        Belum Konfirmasi
                                                                    @elseif ($item->status == 2)
                                                                        Sudah Dikonfirmasi
                                                                    @elseif ($item->status == 3)
                                                                        Ditolak
                                                                    @endif%0A
                                                                Keterangan: {{ $item->catatan ?: '-' }}%0A%0A
                                                                Silahkan cek pesanan anda.%0A
                                                                Salam hangat"
                                                                target="_blank">
                                                                <i class="bx bx-edit-alt me-1"></i> WhatsApp
                                                             </a>


                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        @include('content.dashboard.transaksi.detailTransaksi')
                                        {{-- @include('contents.dashboard.transaksi.hapus') --}}
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                        <div class="d-flex justify-content-end">
                            {{-- {{ $transaksi->links() }} --}}
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
