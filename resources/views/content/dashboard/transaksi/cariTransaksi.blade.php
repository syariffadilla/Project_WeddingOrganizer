<!-- Modal -->
<div class="modal fade" id="CariTransaksi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CariTransaksi">Cari Transaksi </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.transaksi.cari') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Nomor Transaksi</label>
                            <input type="text" id="nameBasic" class="form-control" name="noTransaksi"
                                placeholder="Masukan Nomor Transaksi" />
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </form>
        </div>
    </div>
</div>
