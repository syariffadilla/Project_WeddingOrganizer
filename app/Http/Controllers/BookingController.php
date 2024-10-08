<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();



        // dd($data);

        return view('content.dashboard.transaksi.index', compact('booking'));
    }


    public function dataBelumKonfrimasi(){

        // $user = Auth::user();
        $booking = Booking::where('status', 1)->get();

        $title = 'Belum Konfirmasi';

        return view('content.dashboard.transaksi.index1', compact('booking', 'title'));

    }

    public function datatolak(){

        // $user = Auth::user();
        $booking = Booking::where('status', 3)->get();

        $title = 'Ditolak';

              return view('content.dashboard.transaksi.index1', compact('booking', 'title'));


    }

    public function indexKonfirmasi()
    {
         // $user = Auth::user();
         $booking = Booking::where('status', 2)->get();

         $title = 'Sudah Konfirmasi';


              return view('content.dashboard.transaksi.index1', compact('booking', 'title'));

    }


    public function konfirmasi(Request $request, $id)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'konfirmasi' => 'required|integer', // Ubah sesuai dengan aturan validasi yang diperlukan
            // Anda bisa menambahkan validasi lainnya sesuai kebutuhan
        ]);

        try {
            // Ambil data transaksi berdasarkan ID
            $transaksi = Booking::findOrFail($id);

            // Update status transaksi
            $transaksi->status = $request->konfirmasi;
            $transaksi->cacatan_admin = $request->keteranganAdmin;

            // Simpan perubahan
            $transaksi->save();

            // Redirect dengan pesan sukses
            return redirect()->route('admin.transaksi')->with('success', 'Data Pesanan berhasil disimpan.');
        } catch (\Exception $e) {
            // Jika terjadi error, redirect kembali dengan pesan error
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data Pesanan. ' . $e->getMessage());
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
