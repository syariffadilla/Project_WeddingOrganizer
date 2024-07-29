@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span><span
                    class="text-muted fw-light">Pembeli/</span>Data Pembeli </h4>

            <!-- Bordered Table -->
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <h5 class="card-header">Data Pembeli<Table></Table>
                        </h5>
                    </div>
                    <div class="col-6">
                        <h5 class="text-end card-header"> <button type="button" class="btn btn-sm btn-primary"
                                data-bs-toggle="modal" data-bs-target="#CariPembeli">
                                Cari Pembeli
                            </button>
                        </h5>
                    </div>


                    {{-- @include('contents.dashboard.Pembeli.cariPembeli') --}}
                    {{-- <div>
                <label for="html5-search-input" class="text-end">Search</label>
                        <div class="col-3 float-end pr-4">
                          <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                        </div>
                    </div> --}}
                </div>

                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        @if ($user->isEmpty())
                            <div class="text-center my-2"><i>Data Kosong</i></div>
                        @else
                            <table class="table table-bordered mb-3">
                                <thead class="mt-3">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No Telefon</th>
                                        {{-- <th>Keterangan</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                    $no = 1;
                                     @endphp

                                    @foreach ($user as $u)
                                    
                                        <tr>
                                            <td class="col-1 text-center">{{ $no++ }}</td>
                                            <td class="col-1 text-center">{{ $u->name }}</td>
                                            <td class="col-1 text-center">{{ $u->email }}</td>
                                            <td class="col-1 text-center">{{ $u->alamat }}</td>
                                            <td class="col-1 text-center">{{ $u->no_tlfn }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editModalKat{{ $u->booking_id }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                          
                                                          
                                                         

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    

                                    @endforeach
                                  
                                </tbody>
                            </table>

                        @endif
                        <div class="d-flex justify-content-end">
                            {{-- {{ $Pembeli->links() }} --}}
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
