<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = Paket::paginate(10);
        return view('content.dashboard.paket.index', compact('paket'));
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
            'nama_paket' => 'required|string',
            'harga' => 'required|numeric',
            'link_vidio' => 'string',
            'include1' => 'required|string',
            'include2' => 'string',
            'include3' => 'string',
            'include4' => 'string',
            'include5' => 'string',
            'include6' => 'string',
            'include7' => 'string',
            'include8' => 'string',
            'include9' => 'string',
            'include10' => 'string',
            'include11' => 'string',
            'include12' => 'string',
            'include13' => 'string',
            'keterangan' => 'string',
            'foto1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // Simpan data ke dalam database
        $paket = new Paket;
        $paket->nama_paket = $request->input('nama_paket');
        $paket->harga = $request->input('harga');
        $paket->link_vidio = $request->input('link_vidio');
        $paket->include1 = $request->input('include1');
        $paket->include2 = $request->input('include2');
        $paket->include3 = $request->input('include3');
        $paket->include4 = $request->input('include4');
        $paket->include5 = $request->input('include5');
        $paket->include6 = $request->input('include6');
        $paket->include7 = $request->input('include7');
        $paket->include8 = $request->input('include8');
        $paket->include9 = $request->input('include9');
        $paket->include10 = $request->input('include10');
        $paket->include11 = $request->input('include11');
        $paket->include12 = $request->input('include12');
        $paket->include13 = $request->input('include13');
        $paket->keterangan = $request->input('keterangan');

        // Simpan foto

        $foto1 = $request->file('foto1');
        $nama_foto1 = 'foto1_' . time() . '.' . $foto1->getClientOriginalExtension();
        $foto1->move('paket/', $nama_foto1);
        $paket->foto1 = $nama_foto1;

        if ($request->hasFile('foto2')) {
            $foto2 = $request->file('foto2');
            $nama_foto2 = 'foto2_' . time() . '.' . $foto2->getClientOriginalExtension();
            $foto2->move('paket/', $nama_foto2);
            $paket->foto2 = $nama_foto2;
        }
        if ($request->hasFile('foto3')) {
            $foto3 = $request->file('foto3');
            $nama_foto3 = 'foto3_' . time() . '.' . $foto3->getClientOriginalExtension();
            $foto3->move('paket/', $nama_foto3);
            $paket->foto3 = $nama_foto3;
        }
        if ($request->hasFile('foto4')) {
            $foto4 = $request->file('foto4');
            $nama_foto4 = 'foto4_' . time() . '.' . $foto4->getClientOriginalExtension();
            $foto4->move('paket/', $nama_foto4);
            $paket->foto4 = $nama_foto4;
        }
        if ($request->hasFile('foto5')) {
            $foto5 = $request->file('foto5');
            $nama_foto5 = 'foto5_' . time() . '.' . $foto5->getClientOriginalExtension();
            $foto5->move('paket/', $nama_foto5);
            $paket->foto5 = $nama_foto5;
        }
        if ($request->hasFile('foto6')) {
            $foto6 = $request->file('foto6');
            $nama_foto6 = 'foto6_' . time() . '.' . $foto6->getClientOriginalExtension();
            $foto6->move('paket/', $nama_foto6);
            $paket->foto6 = $nama_foto6;
        }



        if ($paket->save()) {
            return redirect()->route('admin.dashboard.paket')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.dashboard.paket')->withErrors('Gagal', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket, $id)
    {
        $validatedData = $request->validate([
            'nama_paket' => 'string',
            'harga' => 'numeric',
            'link_vidio' => 'string',
            'include1' => 'string',
            'include2' => 'string',
            'include3' => 'string',
            'include4' => 'string',
            'include5' => 'string',
            'include6' => 'string',
            'include7' => 'string',
            'include8' => 'string',
            'include9' => 'string',
            'include10' => 'string',
            'include11' => 'string',
            'include12' => 'string',
            'include13' => 'string',
            'keterangan' => 'string',
            'foto1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // Ambil data paket berdasarkan ID
        $paket = Paket::find($id);

        // Update data berdasarkan input dari formulir
        $paket->nama_paket = $request->input('nama_paket');
        $paket->harga = $request->input('harga');
        $paket->include1 = $request->input('include1');
        $paket->include2 = $request->input('include2');
        $paket->include3 = $request->input('include3');
        $paket->include4 = $request->input('include4');
        $paket->include5 = $request->input('include5');
        $paket->include6 = $request->input('include6');
        $paket->include7 = $request->input('include7');
        $paket->include8 = $request->input('include8');
        $paket->include9 = $request->input('include9');
        $paket->include10 = $request->input('include10');
        $paket->include12 = $request->input('include11');
        $paket->include13 = $request->input('include12');
        $paket->keterangan = $request->input('keterangan');


        if ($request->hasFile('foto1')) {
            // Delete Old File if it exists
            if (!empty($paket->foto1)) {
                $oldImgPath = public_path('/paket/' . $paket->foto1);
                if (file_exists($oldImgPath)) {
                    unlink($oldImgPath);
                }
            }

            // Update New File
            $foto1 = $request->file('foto1');
            $nama_foto1 = 'foto1_' . time() . '.' . $foto1->getClientOriginalExtension();
            $foto1->move('lokasi/', $nama_foto1);
            $paket->foto1 = $nama_foto1;
        }
        if ($request->hasFile('foto2')) {
            // Delete Old File if it exists
            if (!empty($paket->foto2)) {
                $oldImgPath = public_path('/paket/' . $paket->foto2);
                if (file_exists($oldImgPath)) {
                    unlink($oldImgPath);
                }
            }

            // Update New File
            $foto2 = $request->file('foto2');
            $nama_foto2 = 'foto2_' . time() . '.' . $foto2->getClientOriginalExtension();
            $foto2->move('lokasi/', $nama_foto2);
            $paket->foto2 = $nama_foto2;
        }

        if ($request->hasFile('foto3')) {
            // Delete Old File if it exists
            if (!empty($paket->foto3)) {
                $oldImgPath = public_path('/paket/' . $paket->foto3);
                if (file_exists($oldImgPath)) {
                    unlink($oldImgPath);
                }
            }

            // Update New File
            $foto3 = $request->file('foto3');
            $nama_foto3 = 'foto3_' . time() . '.' . $foto3->getClientOriginalExtension();
            $foto3->move('lokasi/', $nama_foto3);
            $paket->foto3 = $nama_foto3;
        }


        if ($request->hasFile('foto4')) {
            // Delete Old File if it exists
            if (!empty($paket->foto4)) {
                $oldImgPath = public_path('/paket/' . $paket->foto4);
                if (file_exists($oldImgPath)) {
                    unlink($oldImgPath);
                }
            }

            // Update New File
            $foto4 = $request->file('foto4');
            $nama_foto4 = 'foto4_' . time() . '.' . $foto4->getClientOriginalExtension();
            $foto4->move('lokasi/', $nama_foto4);
            $paket->foto4 = $nama_foto4;
        }


        if ($request->hasFile('foto5')) {
            // Delete Old File if it exists
            if (!empty($paket->foto5)) {
                $oldImgPath = public_path('/paket/' . $paket->foto5);
                if (file_exists($oldImgPath)) {
                    unlink($oldImgPath);
                }
            }

            // Update New File
            $foto5 = $request->file('foto5');
            $nama_foto5 = 'foto5_' . time() . '.' . $foto5->getClientOriginalExtension();
            $foto5->move('lokasi/', $nama_foto5);
            $paket->foto5 = $nama_foto5;
        }


        if ($request->hasFile('foto6')) {
            // Delete Old File if it exists
            if (!empty($paket->foto6)) {
                $oldImgPath = public_path('/paket/' . $paket->foto6);
                if (file_exists($oldImgPath)) {
                    unlink($oldImgPath);
                }
            }

            // Update New File
            $foto6 = $request->file('foto6');
            $nama_foto6 = 'foto6_' . time() . '.' . $foto6->getClientOriginalExtension();
            $foto6->move('lokasi/', $nama_foto6);
            $paket->foto6 = $nama_foto6;
        }


        if ($paket->save()) {
            return redirect()->route('admin.dashboard.paket')->with('success', 'Data Berhasil Diedit');
        } else {
            return redirect()->route('admin.dashboard.paket')->withErrors('Gagal', 'Data Gagal Diedit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Paket $paket)
    {
        // @dd($paket);
        $gambarFields = ['foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6'];

        foreach ($gambarFields as $field) {
            $newImage = $request->file($field);

            if ($newImage) {
                if (!empty($paket->$field)) {
                    // Hapus File lama
                    $imgPath = public_path() . '/paket/' . $paket->$field;
                    unlink($imgPath);
                }
            }
        }

        $paket->delete();

        return redirect()->route('admin.dashboard.paket')->with('success', 'Data Berhasil Dihapus');
    }
}
