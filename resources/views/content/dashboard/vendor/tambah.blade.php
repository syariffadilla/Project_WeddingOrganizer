<!-- Extra Large Modal -->
<div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Tambah Data Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.vendor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-12">
                        <h6 class="text-muted">Perhatikan Saat Menginput Data !!</h6>
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-pills mb-3" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                        aria-selected="true">
                                        Data vendor
                                    </button>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Nama vendor</label>
                                            <input type="text" id="nameExLarge" name="nama_vendor"
                                                class="form-control" placeholder="Ketik Nama vendor" required />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">Harga</label>
                                            <input type="text" id="nameExLarge" name="harga"
                                                class="form-control" placeholder="Ketik Harga  vendor" required />
                                        </div>
                                        <div class="col mb-3">
                                            <label for="nameExLarge" class="form-label">No Tlfn</label>
                                            <input type="text" id="nameExLarge" name="no_tlfn"
                                                class="form-control" placeholder="Ketik No Hp vendor" required />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <input class="form-control" type="file" name="foto"
                                            id="formFile" required />
                                    </div>

                                    <div class="mt-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="8"></textarea>
                                    </div>
                                    <div class="mt-2">
                                        <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="8"></textarea>
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


@section('js')

 <script>
        document.getElementById("buttonAddInclude").addEventListener("click", function () {
            // Menemukan elemen terakhir dalam row
            var lastIncludeDiv = document.getElementById("include").lastElementChild;

            // Mendapatkan nomor elemen terakhir
            var lastIncludeNumber = parseInt(lastIncludeDiv.querySelector("label").textContent.match(/\d+/)[0]);

            // Membuat elemen baru dengan nomor yang diinkrementalkan
            var newIncludeDiv = document.createElement("div");
            newIncludeDiv.className = "col-4 mb-4";

            var label = document.createElement("label");
            label.className = "form-label";
            label.textContent = "Include " + (lastIncludeNumber + 1);

            var input = document.createElement("input");
            input.type = "text";
            input.name = "include" + (lastIncludeNumber + 1);
            input.className = "form-control";
            input.placeholder = "Ketikkan Include " + (lastIncludeNumber + 1);
            input.required = true;

            // Menambah elemen ke dalam div baru
            newIncludeDiv.appendChild(label);
            newIncludeDiv.appendChild(input);

            // Menambah elemen baru ke dalam row
            lastIncludeDiv.parentNode.insertBefore(newIncludeDiv, lastIncludeDiv.nextSibling);
        });
    </script>

@endsection
