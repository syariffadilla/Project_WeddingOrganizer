<!-- Extra Large Modal -->
<div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel4">Tambah Data Bank</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.bank.store') }}" method="POST">
                    @csrf
                    <div class="col-xl-12">
                        <h6 class="text-muted">Perhatikan Saat Menginput Data !!</h6>
                        <div class="nav-align-top mb-4">
                            <ul class="nav nav-pills mb-3" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                        data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home"
                                        aria-selected="true">
                                        Data Bank
                                    </button>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Bank</label>
                                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Ketik Nama Bank" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="atas_nama" class="form-label">Atas Nama</label>
                                            <input type="text" id="atas_nama" name="atas_nama" class="form-control" placeholder="Ketik Atas Nama" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="norek" class="form-label">No Rekening</label>
                                            <input type="text" id="norek" name="norek" class="form-control" placeholder="Ketik No Rekening" required />
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
