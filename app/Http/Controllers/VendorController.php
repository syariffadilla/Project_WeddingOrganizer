<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vendor = Vendor::paginate(10);

        return view('content.dashboard.vendor.index', compact('vendor'));
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

        // @dd($request);

        // Validasi input
        $request->validate([
            'nama_vendor' => 'required|string',
            'harga' => 'required|numeric',
            'no_tlfn' => 'required|numeric',

            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'required|string',
            'keterangan' => 'required|string',

        ]);

        // Simpan data ke dalam database
        $vendor = new Vendor();
        $vendor->nama_vendor = $request->input('nama_vendor');
        $vendor->harga = $request->input('harga');
        $vendor->alamat = $request->input('alamat');
        $vendor->no_tlp = $request->input('no_tlfn');

        $vendor->keterangan = $request->input('keterangan');

        // Simpan foto

        $foto = $request->file('foto');
        $nama_foto = 'foto_' . time() . '.' . $foto->getClientOriginalExtension();
        $foto->move('vendor/', $nama_foto);
        $vendor->foto = $nama_foto;


        if ($vendor->save()) {
            return redirect()->route('admin.vendor')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.vendor')->withErrors('Gagal', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    // VendorController.php
    public function update(Request $request, $id)
    {
        $vendor = Vendor::findOrFail($id);
        // @dd($vendor);
        // Validate and update the model attributes
        $request->validate([
            'nama_vendor' => 'string',
            'harga' => 'numeric',
            'no_tlfn' => 'numeric',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'alamat' => 'string',
            'keterangan' => 'string',
        ]);

        $vendor->nama_vendor = $request->input('nama_vendor');
        $vendor->harga = $request->input('harga');
        $vendor->alamat = $request->input('alamat');
        $vendor->no_tlp = $request->input('no_tlfn');
        $vendor->keterangan = $request->input('keterangan');

    // Handle photo upload if a file has been provided
if ($request->hasFile('foto')) {
    // Delete Old File if it exists
    if (!empty($vendor->foto)) {
        $oldImgPath = public_path('/vedor/' . $vendor->foto);
        if (file_exists($oldImgPath)) {
            unlink($oldImgPath);
        }
    }

    // Update New File
    $foto = $request->file('foto');
    $nama_foto = 'foto_' . time() . '.' . $foto->getClientOriginalExtension();
    // $nama_res = $request->nama_res . date('Ymdhis') . '.' . $gambar->getClientOriginalExtension();
    $foto->move('vendor/', $nama_foto);
    $vendor->foto = $nama_foto;
}


        // Save the changes
        $vendor->save();

        return redirect()->route('admin.vendor')->with('success', 'Vendor updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vendor $vendor)
    {

        $gambarFields = ['foto'];

        foreach ($gambarFields as $field) {
            $newImage = $request->file($field);

            if ($newImage) {

                if (!empty($request->file($field))) {
                    //Hapus File lama
                    $ImgPath = public_path(). '/vendor/' . $vendor->$field;
                    unlink($ImgPath);
                }
            }
        }
        // Delete File
    //    $imgPath = public_path() . '/assets/dashboard/img/resep/'. $lokasi->$gambarFields;
    //    unlink($imgPath);
       // Delete Data
       $vendor->delete();

       return redirect()->route('vendor$vendor.index')->with('success', 'Data Berhasil Dihapus');
    }
}
