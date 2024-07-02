


<!-- Extra Large Modal -->
<div class="modal fade" id="editModalKat{{ $item->vendor_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="#editModalKat{{ $item->vendor_id }}">Edit Data Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.vendor.update', ['id' => $item->vendor_id ?? 0]) }}" method="POST" enctype="multipart/form-data">
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
                                        Data Vendor
                                    </button>
                                </li>


                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Nama vendor</label>
                                            <input type="text" id="nameExLarge" name="nama_vendor"
                                                class="form-control" value="{{ $item->nama_vendor }}"  />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Harga</label>
                                            <input type="text" id="nameExLarge" name="harga"
                                                class="form-control" value="{{ $item->harga }}"  />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">No Tlfn</label>
                                            <input type="text" id="nameExLarge" name="no_tlfn"
                                                class="form-control" value="{{ $item->no_tlp }}"  />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <input class="form-control" type="file" name="foto"
                                            id="formFile"  />
                                            <img class="mt-2" src="{{ asset('vendor/'. $item->foto) }}" alt="" srcset="">
                                    </div>

                                    <div class="mt-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="8">{{ $item->alamat }}</textarea>
                                    </div>
                                    <div class="mt-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="8">{{ $item->keterangan }}</textarea>
                                    </div>
                                </div>

                                {{-- <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                                <div id="summernote"></div>
                            </div> --}}

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
