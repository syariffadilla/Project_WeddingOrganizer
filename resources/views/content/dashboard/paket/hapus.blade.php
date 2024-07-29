<!-- Modal -->
<div class="modal fade" id="hapusModalProd{{ $item->paket_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalProd">Hapus Paket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.dashboard.paket.delete', ['id' => $item->paket_id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Nama Paket</label>
                            <input type="text" id="nameBasic" class="form-control" name="Kategori"
                                value="{{ $item->nama_paket }}" readonly />

                                <input type="hidden" value="{{ $item->paket_id }}" name="Paket">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Batal
                </button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
