@extends('layouts.dashboard')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span>Admoin</h4>
        <!-- Bordered Table -->
        <div class="card">
            <div class="row">
            <div class="col-6">
                <h5 class="card-header">Data Admin</h5>
            </div>
            <div class="col-6">
                <h5 class="text-end card-header"> <button type="button" class="btn btn-sm btn-primary"
                    data-bs-toggle="modal" data-bs-target="#adduser">
                    Tambah User
                </button>
            </h5>
            </div>

            </div>
            <div class="container">
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
        </div>
            {{-- <div class="container">
            <a class="tombol-tambah" href="{{ route('resep.create')}}">Tambah Data</a>
        </div> --}}
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    @if ($dtuser->isEmpty())
                        <div class="text-center my-2"><i>Data Kosong</i></div>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($dtuser as $index => $items)
                                    <tr>
                                        {{-- <td>{{$dtusers->firstitem()+$no}}</td> --}}
                                        {{-- <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                  </td> --}}
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $items->name }}</td>
                                        <td>{{ $items->email }}</td>
                                        @if ($items->role == 1)
                                            <td>Admoin</td>
                                        @endif

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#editModalKat{{ $items->id }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                        data-bs-target="#hapusModalKat{{ $items->id }}"><i
                                                            class="bx bx-trash me-1"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    @include('content.dashboard.users.edit')
                                    @include('content.dashboard.users.tambah')
                                    @include('content.dashboard.users.hapus')
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    <br>

                    {{-- {{ $dtuser->links() }} --}}

                </div>
            </div>
        </div>
        <!--/ Bordered Table -->
    </div>

    {{-- <div class="card mb-4">
    <div class="card-body">
        <div class="row gy-3">
            <div class="modal fade" id="backDropModal{{ $items->id }}" data-bs-backdrop="static" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                <form class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Hapus Data {{ $items->nama_res }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                        <h5>Apakah Anda yakin akan menghapus data ini?</h5>
                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                    <form method="POST" action="{{ route('resep.destroy', $items->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-danger">
                                Hapus
                            </button>
                        </form>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
