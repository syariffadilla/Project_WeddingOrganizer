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
    public function index()
    {
        $data['paket'] = Paket::all();
        $data['vendor'] = Vendor::all();


        return view('content.dashboard.landing.index', $data);
    }

    public function paket()
    {
        $data['paket'] = Paket::paginate(12);
        $data['paketCount'] = Paket::count();
        $data['vendor'] = Vendor::all();
        return view('content.dashboard.landing.paket', $data);
    }



    public function detailPaket($id)
    {
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
        return view('content.dashboard.landing.detail_paket', compact('vendor', 'user', 'tambahan'));
    }




    public function booking(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'paket_id' => 'required|exists:paket,paket_id',
            'booking_date' => 'required|date',
            'kecamatan' => 'required',
            'kota' => 'required',
            'bukti_tf' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk file gambar
            'catatan' => 'nullable|string|max:200',
        ]);

        // Buat invoice
        $invoice = 'INV-' . Auth::id() . '-' . time();

        // Simpan file gambar
        if ($request->hasFile('bukti_tf')) {
            $gambar = $request->file('bukti_tf');
            $nama_gambar = 'gambar_' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('paket/'), $nama_gambar);
        } else {
            $nama_gambar = null;
        }

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
            'bukti_tf' => $nama_gambar,
        ]);

        if ($booking->save()) {
            // Hapus item dari cart berdasarkan user_id dan paket_id
            Cart::where('id_user', Auth::id())
                ->where('id_paket', $request->paket_id)
                ->delete();

            return redirect()->route('pesanan.berhasil')->with('success', 'Booking created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to create booking');
        }
    }


    public function about()
    {
        return view('content.dashboard.landing.about');
    }


    public function dashboardUser()
    {

        // // Jika Anda ingin mencari booking berdasarkan role (misalnya, jika ada kolom 'role' di model Booking)
        // $booking = Booking::where('user_id', Auth::user()->id)->get(); // .get() untuk mengambil koleksi data

        $items =   $user = Auth::user();


        // dd($booking);

        return view('content.dashboard.landing.dashboard1', compact('items'));
    }
    public function TransaksiUser()
    {

        // // Jika Anda ingin mencari booking berdasarkan role (misalnya, jika ada kolom 'role' di model Booking)
        // $booking = Booking::where('user_id', Auth::user()->id)->get(); // .get() untuk mengambil koleksi data

        // Mengambil data booking sesuai dengan user_id yang sedang login
        $booking = Booking::where('user_id', Auth::user()->id)->get(); // .get() untuk mengambil koleksi data



        // dd($booking);

        return view('content.dashboard.landing.detail_user', compact('booking'));
    }


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

        ]);

        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Perbarui data pengguna
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->kecamatan = $request->input('kecamatan');
        $user->kabupaten = $request->input('kabupaten');
        $user->no_tlfn = $request->input('no_tlfn');

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
}
