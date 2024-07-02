


<!-- Extra Large Modal -->
<div class="modal fade" id="editModalKat{{ $item->paket_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="#editModalKat{{ $item->paket_id }}">Edit Data Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.dashboard.paket.update', ['id' => $item->paket_id ?? 0]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-xl-12">
                        <h6 class="text-muted">Perhatikan Saat Menginput Data !!</h6>
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-pills mb-3" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-home-2" aria-controls="navs-pills-top-home-2"
                                        aria-selected="true">
                                        Data Barang
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-profile3" aria-controls="navs-pills-top-profile3"
                                        aria-selected="false">
                                        Foto Paket
                                    </button>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-home-2" role="tabpanel">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Nama Paket</label>
                                            <input type="text" id="nameExLarge" name="nama_paket"
                                                class="form-control" value=" {{ $item->nama_paket }}"  />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Harga</label>
                                            <input type="text" id="nameExLarge" name="harga"
                                                class="form-control" value="{{ $item->harga }}"  />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Link Vidio (Youtube)</label>
                                            <input type="text" id="nameExLarge" name="link_vidio"
                                                class="form-control" value="{{ $item->link_vidio }}"  />
                                        </div>

                                    </div>
                                    <div class="row" id="include">

                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 1</label>
                                            <input type="text" name="include1" id="emailExLarge" class="form-control"
                                                value="{{ $item->include1 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 2</label>
                                            <input type="text" name="include2" id="emailExLarge" class="form-control"
                                                value="{{ $item->include2 }}"  />
                                        </div>
                                        <div class="col-4 mb-0">
                                            <label for="emailExLarge" class="form-label">include 3</label>
                                            <input type="text" name="include3" id="emailExLarge" class="form-control"
                                                value="{{ $item->include3 }}"  />
                                                {{-- <h5 class="text-end card-header"><button type="button" class="btn btn-primary " id="buttonAddInclude">Tambah Include</button></h5> --}}
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 4</label>
                                            <input type="text" name="include4" id="emailExLarge" class="form-control"
                                                value="{{ $item->include4 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 5</label>
                                            <input type="text" name="include5" id="emailExLarge" class="form-control"
                                                value="{{ $item->include5 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 6</label>
                                            <input type="text" name="include6" id="emailExLarge" class="form-control"
                                                value="{{ $item->include6 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 7</label>
                                            <input type="text" name="include7" id="emailExLarge" class="form-control"
                                                value="{{ $item->include7 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 8</label>
                                            <input type="text" name="include8" id="emailExLarge" class="form-control"
                                                value="{{ $item->include8 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 9</label>
                                            <input type="text" name="include9" id="emailExLarge" class="form-control"
                                                value="{{ $item->include9 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 10</label>
                                            <input type="text" name="include10" id="emailExLarge" class="form-control"
                                                value="{{ $item->include10 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 11</label>
                                            <input type="text" name="include11" id="emailExLarge" class="form-control"
                                                value="{{ $item->include11 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 12</label>
                                            <input type="text" name="include12" id="emailExLarge" class="form-control"
                                                value="{{ $item->include12 }}"  />
                                        </div>
                                        <div class="col-4 mb-4">
                                            <label for="emailExLarge" class="form-label">include 13</label>
                                            <input type="text" name="include13" id="emailExLarge" class="form-control"
                                                value="{{ $item->include13 }}"  />
                                        </div>

                                    </div>



                                    <div class="mt-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="8">{{ $item->keterangan }}</textarea>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navs-pills-top-profile3" role="tabpanel">

                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Foto Utama</label>
                                                <input class="form-control" type="file" name="foto1"
                                                    id="formFile"  />
                                                    <img src="{{ asset('paket/' . $item->foto1) }}"
                                                    alt="{{ $item->nama_paket }}" class="mt-1" height="50%"
                                                    width="50%">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Foto 2</label>
                                                <input class="form-control" type="file" name="foto2"
                                                    id="formFile2" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Foto 5</label>
                                                <input class="form-control" type="file" name="foto5"
                                                    id="formFile4" />
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Foto 3</label>
                                                <input class="form-control" type="file" name="foto3"
                                                    id="formFile3" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Foto 4</label>
                                                <input class="form-control" type="file" name="foto4"
                                                    id="formFile4" />
                                            </div>

                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Foto 6</label>
                                                <input class="form-control" type="file" name="foto6"
                                                    id="formFile4" />
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                {{-- <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                                <div id="summernote"></div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
