<?php

namespace App\Http\Controllers;
use App\Models\User;



use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dtuser = User::where('role', 2)
        ->get();
        // dd($user);

        return view('content.dashboard.users.index', compact('dtuser'));
    }
    public function index2()
    {

        $dtuser = User::where('role', 1)
        ->get();
        // dd($user);

        return view('content.dashboard.users.index2', compact('dtuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validasi data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'kecamatan' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'kabupaten' => 'required|string|max:255',
        'no_tlfn' => 'required|string|max:15',
        'password' => 'nullable|string|min:8',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'role' => 'required|in:1,2',
    ]);

    // Jika ada file avatar, upload ke folder public/avatar
    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $validated['avatar'] = $avatarPath;
    }

    // Jika password kosong, jangan set password
    if (!$request->filled('password')) {
        unset($validated['password']);
    } else {
        // Hash password sebelum disimpan
        $validated['password'] = bcrypt($validated['password']);
    }

    // Simpan data pengguna baru
    User::create($validated);

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Pengguna berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'kecamatan' => 'nullable|string|max:255',
            'kabupaten' => 'nullable|string|max:255',
            'no_tlfn' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:6|confirmed',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'role' => 'required|integer|in:1,2',
        ]);

        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Perbarui data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->kecamatan = $request->input('kecamatan');
        $user->kabupaten = $request->input('kabupaten');
        $user->no_tlfn = $request->input('no_tlfn');
        $user->role = $request->input('role');

        // Cek jika ada password yang diubah
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        // Cek jika ada avatar yang diunggah
        if ($request->hasFile('avatar')) {
            // Hapus avatar lama jika ada
            if ($user->avatar && file_exists(public_path('paket/' . $user->avatar))) {
                unlink(public_path('paket/' . $user->avatar));
            }

            // Simpan avatar baru
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->store('paket', 'public');
            $user->avatar = basename($avatarPath);
        }

        // Simpan perubahan ke database
        $user->save();

        return redirect()->back()->with('success', 'Data pengguna berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Hapus pengguna dari database
        $user->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pengguna berhasil dihapus.');
    }

}
