<!-- Modal -->
<div class="modal fade" id="HapusTransaksi{{ $item->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="HapusTransaksi">Hapus Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.transaksi.hapus', ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">No Transaksi</label>
                            <input type="text" id="nameBasic" class="form-control" name="Kategori"
                                value="{{ $item->no_transaksi }}" readonly />
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
