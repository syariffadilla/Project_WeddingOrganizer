<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
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
        return view('content.dashboard.landing.cart');
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
        try {
            $request->validate([
                'id_product' => 'required|integer',
                'id_user' => 'required|integer',
                'quantity' => 'required|integer|min:1',
            ]);

            $cart = new Cart();
            $cart->id_product = $request->id_product;
            $cart->id_user = $request->id_user;
            $cart->quantity = $request->quantity;
            $cart->save();

            // Set flash session message
            $request->session()->flash('success', 'Produk berhasil ditambahkan ke keranjang');

            // Redirect back to the previous page
            return redirect()->back();
        } catch (\Exception $e) {
            // Set flash session message for error (optional)
            $request->session()->flash('error', $e->getMessage());

            return redirect()->back()->withInput(); // Redirect back with input data
        }
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
        //
    }
}
