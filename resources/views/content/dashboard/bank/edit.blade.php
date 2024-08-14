


<!-- Extra Large Modal -->
<div class="modal fade" id="editModalKat{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="#editModalKat{{ $item->id }}">Edit Data Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.bank.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nama_vendor" class="form-label">Nama Bank</label>
                            <input type="text" id="nama_vendor" name="nama" class="form-control" value="{{ old('nama', $item->nama) }}" required />
                        </div>
                        <div class="col mb-3">
                            <label for="atas_nama" class="form-label">Atas Nama</label>
                            <input type="text" id="atas_nama" name="atas_nama" class="form-control" value="{{ old('atas_nama', $item->atas_nama) }}" required />
                        </div>
                        <div class="col mb-3">
                            <label for="norek" class="form-label">No Rekening</label>
                            <input type="text" id="norek" name="norek" class="form-control" value="{{ old('norek', $item->norek) }}" required />
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
