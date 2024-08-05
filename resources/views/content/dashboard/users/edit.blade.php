<!-- Modal -->
<div class="modal fade" id="editModalKat{{ $items->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalKat">Edit Data Pembeli</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.pengguna.update', ['user' => $items->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" class="form-control" name="name"
                                value="{{ $items->name }}" />
                        </div>
                        <div class="col-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email"
                                value="{{ $items->email }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" id="kecamatan" class="form-control" name="kecamatan"
                                value="{{ $items->kecamatan }}" />
                        </div>
                        <div class="col-6 mb-3">
                            <label for="kabupaten" class="form-label">Kabupaten</label>
                            <input type="text" id="kabupaten" class="form-control" name="kabupaten"
                                value="{{ $items->kabupaten }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="no_tlfn" class="form-label">No Telepon</label>
                            <input type="text" id="no_tlfn" class="form-control" name="no_tlfn"
                                value="{{ $items->no_tlfn }}" />
                        </div>
                        <div class="col-6 mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="Kosongan Jika Tidak Ingin Diubah" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input type="file" id="avatar" class="form-control" name="avatar" />
                            @if ($items->avatar)
                                <img src="{{ asset('paket/' . $items->avatar) }}" width="200px" height="200px"
                                    alt="Avatar">
                            @endif
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="form-control">
                            <option value="1" {{ $items->role == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ $items->role == 2 ? 'selected' : '' }}>Pembeli</option>
                        </select>
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
