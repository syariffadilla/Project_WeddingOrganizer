<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\User;
use App\Models\Booking;
use App\Models\Cart;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function index(){
        $data['paket'] = Paket::all();
        $data['vendor'] = Vendor::all();


        return view('content.dashboard.landing.index', $data);
    }

    public function paket(){
        $data['paket'] = Paket::all();
        $data['vendor'] = Vendor::all();
        return view('content.dashboard.landing.index', $data);
    }


    public function detailPaket($id){
        $vendor = Paket::find($id);
        $tambahan = Vendor::all();

        // dd($vendor);
        if (!$vendor) {
            abort(404); // Mengirim respons 404 jika vendor tidak ditemukan
        }

        // Atau jika Anda ingin menggunakan findOrFail yang otomatis mengirimkan respons 404 jika tidak ditemukan
        // $vendor = Vendor::findOrFail($id);

         // Mendapatkan pengguna yang sedang login
         $user = Auth::user();

        //  dd($user);

        // dd($vendor);
        // @dd($admin);
        // @dd($paket);
        return view('content.dashboard.landing.detail_paket', compact('vendor', 'user','tambahan'));
    }




    public function booking(Request $request)
    {
        // dd($request);
          // Validasi request jika diperlukan
          $request->validate([
            'paket_id' => 'required|exists:paket,paket_id',
            'booking_date' => 'required|date',
            'kecamatan' => 'required',
            'kota' => 'required',
                    'butki_tf' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar

            'catatan' => 'nullable|string|max:200',
        ]);

        // Buat invoice
        $invoice = 'INV-' . Auth::id() . '-' . time();


         // Simpan file gambar
    if ($request->hasFile('butki_tf')) {
        $gambar = $request->file('butki_tf');
                $nama_gambar = 'gambar_' . time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('paket/',$nama_gambar);



        // Simpan booking baru
        $booking = new Booking([
            'user_id' => Auth::id(),
            'invoice' => $invoice,
            'paket_id' => $request->paket_id,
            'tanggal_booking' => $request->booking_date,
            'kecamatan' => $request->kecamatan,
            'bank' => $request->bank,
            'kota' => $request->kota,
            'status' => 1,
            'catatan' => $request->catatan,
            'bukti_tf'  => $nama_gambar,
        ]);

        if ($booking->save()) {
            return redirect()->route('pesanan.berhasil')->with('success', 'Booking created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to create booking');
        }
    }




}
    public function about(){
        return view('content.dashboard.landing.about');
    }
}
