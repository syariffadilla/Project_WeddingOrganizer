<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\User;
use App\Models\Booking;
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

    public function detailPaket($id){
        $vendor = Vendor::orderBy('vendor_id')->take(5)->get();
        $paket = Paket::find($id);
        $admin = User::where('role', 1);
        // @dd($admin);
        // @dd($paket);
        return view('content.dashboard.landing.detail_paket', compact('paket', 'vendor'));
    }
    public function booking(Request $request)
    {
        // Validate the request data if needed

        $paket = Paket::find($request->id_paket);
        $user = auth()->user();

        $booking = new Booking([
            'user_id' => $user->id,
            'paket_id' => $request->paket_id,
            'tanggal_booking' => $request->tanggal_booking,
            'status' => 1,
            'catatan' => $request->catatan,
            'vendor_id_1' => $request->has('selectedVendorIds') && isset($request->selectedVendorIds[0]) ? $request->selectedVendorIds[0] : null,
            'vendor_id_2' => $request->has('selectedVendorIds') && isset($request->selectedVendorIds[1]) ? $request->selectedVendorIds[1] : null,
            'vendor_id_3' => $request->has('selectedVendorIds') && isset($request->selectedVendorIds[2]) ? $request->selectedVendorIds[2] : null,
            'vendor_id_4' => $request->has('selectedVendorIds') && isset($request->selectedVendorIds[3]) ? $request->selectedVendorIds[3] : null,
            'vendor_id_5' => $request->has('selectedVendorIds') && isset($request->selectedVendorIds[4]) ? $request->selectedVendorIds[4] : null,
        ]);

        if ($booking->save()) {
            // Retrieve the ID after saving
            $bookingId = $booking->booking_id;


            // Load associated data for display
            $data = Booking::with(['user', 'paket', 'vendor1', 'vendor2', 'vendor3', 'vendor4', 'vendor5'])
            ->find($bookingId);

            // @dd($data);
            // Redirect to the checkout view or do any further processing
            return view('content.dashboard.landing.checkout', compact('request', 'user', 'paket', 'booking', 'data'));
        } else {
            return redirect()->route('utama')->with('error', 'Failed to create booking');
        }
    }



    public function Checkout(Request $request, $id){

        $booking = Booking::find($id);

        $gambar = $request->file('gambar');
                $nama_gambar = 'gambar_' . time() . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('paket/',$nama_gambar);
                $booking->bukti_tf = $nama_gambar;


        $booking->save();
        return redirect()->route('utama')->with('success', 'Data Berhasil Diperbarui');
    }
    public function about(){
        return view('content.dashboard.landing.about');
    }
}
