<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Paket;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['user'] = User::count();
        $data['vendor'] = Vendor::count();
        $data['paket'] = Paket::count();
        // $data['paket'] = Paket::count();
        $data['booking'] = Booking::count();
        $data['bookingData'] = Booking::select('booking.*', 'paket.nama_paket')
        ->join('paket', 'booking.paket_id', '=', 'paket.paket_id')
        ->get();


        $data['bookingPending'] = Booking::where('status', '1')->count();
        $data['bookingKonfirmasi'] = Booking::where('status', '2')->count();
        $data['bookingTolak'] = Booking::where('status', '3')->count();


        $data['totalRupiah'] = Booking::where('status', '3')->count();






        // @dd($data['bookingsStatus1']);


        return view('content.dashboard.index', $data);
    }
}
