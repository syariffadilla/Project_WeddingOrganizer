<!-- Modal -->
<div class="modal fade" id="adduser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Data Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.pengguna.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="Isikan nama" required />
                        </div>
                        <div class="col-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Isikan email" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" id="kecamatan" class="form-control" name="kecamatan" placeholder="Isikan kecamatan" required />
                        </div>
                        <div class="col-6 mb-3">
                            <label for="kabupaten" class="form-label">Kabupaten</label>
                            <input type="text" id="kabupaten" class="form-control" name="kabupaten" placeholder="Isikan kabupaten" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="no_tlfn" class="form-label">No Telepon</label>
                            <input type="text" id="no_tlfn" class="form-control" name="no_tlfn" placeholder="Isikan nomor telepon" required />
                        </div>
                        <div class="col-6 mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Kosongkan jika tidak ingin diubah" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input type="file" id="avatar" class="form-control" name="avatar" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="avatar" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="5"></textarea></div>
                    </div>
                    <div class="col mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="form-control" required>
                            <option value="" disabled selected>Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Pembeli</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
