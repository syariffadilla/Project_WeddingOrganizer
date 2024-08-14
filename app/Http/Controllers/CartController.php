<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();

        // Jika Anda memiliki relasi antara User dan Cart, misalnya dengan menggunakan Eloquent Relationship
        // Anda bisa mengambil cart dari user tersebut dengan cara seperti ini:
        // $cart = $user->cart; // Ini contoh jika menggunakan relasi 'cart' di model User

        // Jika tidak ada relasi, Anda bisa mencari cart secara langsung berdasarkan user_id
        // Misalnya jika user_id disimpan di kolom user_id di tabel Cart:
        $cart = Cart::where('id_user', $user->id)
        ->with('paket') // Mengikutsertakan relasi 'paket'
        ->get();
        // dd($cart);
        // Kemudian kirim data cart ke view


        $total = $cart->sum(function ($carts) {
            return $carts->paket->harga ?? 0;
        });


        return view('content.dashboard.landing.cart', compact('cart','total'));
    }


    public function checkDateAvailability(Request $request)
{
    $bookingDate = $request->input('booking_date');

    // Lakukan pengecekan di database
    $booking = Booking::where('tanggal_booking', $bookingDate)->first();

    if ($booking) {
        return response()->json(['available' => false]);
    }

    return response()->json(['available' => true]);
}


public function pesananBerhasil(Request $request)
{
    return view('content.dashboard.landing.pesanan_berhasil');
}

    public function checkoutIndex()
    {

         // Mengambil user yang sedang login
         $user = Auth::user();

         $bank = Bank::all();

         // Jika Anda memiliki relasi antara User dan Cart, misalnya dengan menggunakan Eloquent Relationship
         // Anda bisa mengambil cart dari user tersebut dengan cara seperti ini:
         // $cart = $user->cart; // Ini contoh jika menggunakan relasi 'cart' di model User

         // Jika tidak ada relasi, Anda bisa mencari cart secara langsung berdasarkan user_id
         // Misalnya jika user_id disimpan di kolom user_id di tabel Cart:
         $cart = Cart::where('id_user', $user->id)
         ->with('paket') // Mengikutsertakan relasi 'paket'
         ->get();
         // dd($cart);
         // Kemudian kirim data cart ke view


         $total = $cart->sum(function ($carts) {
            return $carts->paket->harga ?? 0;
        });



        return view('content.dashboard.landing.checkout',  compact('cart','total', 'bank'));

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
    // public function store(Request $request)
    // {
    //     try {
    //         $request->validate([
    //             'id_product' => 'required|integer',
    //             'id_user' => 'required|integer',
    //             'quantity' => 'required|integer|min:1',
    //         ]);

    //         $cart = new Cart();
    //         $cart->id_product = $request->id_product;
    //         $cart->id_user = $request->id_user;
    //         $cart->quantity = $request->quantity;
    //         $cart->save();

    //         // Set flash session message
    //         $request->session()->flash('success', 'Produk berhasil ditambahkan ke keranjang');

    //         // Redirect back to the previous page
    //         return redirect()->back();
    //     } catch (\Exception $e) {
    //         // Set flash session message for error (optional)
    //         $request->session()->flash('error', $e->getMessage());

    //         return redirect()->back()->withInput(); // Redirect back with input data
    //     }
    // }

    public function countCartItemsAjax()
    {

        $user = Auth::user();

        $totalItems = Cart::where('id_user', $user->id)
        ->count();

        // $totalItems = Cart::;

        return response()->json(['totalItems' => $totalItems]);
    }

    public function store(Request $request)
    {

        // dd($request);
        // Validate data
        $validatedData = $request->validate([

            'id_user' => 'required|integer',
            'id_paket' => 'required|integer',
            'nama_paket' => 'required|string|max:100',
        ]);

        // Create and store the cart item
        $cart = Cart::create($validatedData);

        // If successfully stored, redirect with success message
        return redirect()->back()->with('success', 'Item berhasil ditambahkan ke keranjang!');
    }



    public function checkAuth()
    {
        if (Auth::check()) {
            return response()->json(['authenticated' => true]);
        } else {
            return response()->json(['authenticated' => false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('content.dashboard.landing.detailCart');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return response()->json(['message' => 'Item has been deleted successfully.']);
    }
}
