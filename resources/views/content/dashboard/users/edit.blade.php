<!-- Modal -->
<div class="modal fade" id="editModalKat{{$items->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalKat">Edit Data Pembeli</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.update', ['user' => $items->id]) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Nama</label>
                            <input type="text" id="nameBasic" class="form-control" name="name"
                                value="{{ $items->name }}" />
                        </div>

                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Role</label>
                            <select id="role" name="role" class="form-control">
                                <option value="{{$items->role}}">
                                    Pilih Role
                                </option>
                                <option value="1">Admin</option>
                                <option value="2">Pembeli</option>
                            </select>
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
