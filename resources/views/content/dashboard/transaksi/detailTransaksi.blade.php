


<!-- Extra Large Modal -->
<div class="modal fade" id="editModalKat{{ $item->booking_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="#editModalKat{{ $item->booking_id }}">Edit Data Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.transaksi.konfirmasi', ['id' => $item->booking_id]) }}"
                    method="POST">
                    @csrf
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


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-home-2" role="tabpanel">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Nama Paket</label>
                                            <input type="text" id="nameExLarge" name="nama_paket"
                                                class="form-control" value=" PAKET RP. 12.000.000"  />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Harga</label>
                                            <input type="text" id="nameExLarge" name="harga"
                                                class="form-control" value="{{ number_format($item->paket->harga, 0,'.',',') }}"  />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Tanggal</label>
                                            <input type="text" id="nameExLarge" name="harga"
                                                class="form-control" value="{{ $item->tanggal_booking }}"  />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Vendor</label>
                                            <input type="text" id="nameExLarge" name="harga"
                                                class="form-control" value="{{ $item->vendor1->nama_vendor }}"  />
                                        </div>

                                        <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Konfirmasi Pesanan</label>
                                            <select id="defaultSelect" class="form-select" name="konfirmasi">
                                                @if ($item->status == 0)
                                                <option value="0">Belum Dikonfirmasi</option>
                                                @elseif ($item->status == 1)
                                                <option value="1">Sudah Dikonfirmasi</option>
                                                @elseif ($item->status == 2)
                                                <option value="2">Sedang Diproses</option>
                                                @elseif ($item->status == 3)
                                                <option value="3">Sedang Dikirim</option>
                                                @elseif ($item->status == 4)
                                                <option value="4">Sudah Diterima</option>
                                                @elseif ($item->status == 5)
                                                <option value="5">Ditolak</option>
                                                @endif
                                                <option>Pilih Keterangan</option>
                                                <option value="0">Belum DIkonfirmasi</option>
                                                <option value="1">Sudah Dikonfirmasi</option>
                                                <option value="2">Sedang Diproses</option>
                                                <option value="3">Sedang Dikirim</option>
                                                <option value="4">Sudah Diterima</option>
                                                <option value="5">Ditolak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Foto Bukti</label>
                                            <input class="form-control" type="file" name="foto1"
                                                id="formFile"  />
                                                <img src="{{ asset('paket/' . $item->bukti_tf) }}"
                                                alt="PAKET RP. 12.000.000" class="mt-1" height="50%"
                                                width="50%">
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
                <button type="submit" class="btn btn-primary">kONFIRMASI</button>
            </div>
            </form>
        </div>
    </div>
</div>
