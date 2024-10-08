<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BankController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LandingController::class, 'index'])->name('utama');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/vendorLanding', [LandingController::class, 'vendor'])->name('vendorLanding');
Route::get('/paketLanding', [LandingController::class, 'paket'])->name('paketLanding');
Route::get('/detailPaket/{id}', [LandingController::class, 'detailPaket'])->name('detailPaket');
Route::get('/check-auth', [CartController::class, 'checkAuth'])->name('check-auth');
Route::get('/cart/count', [CartController::class, 'countCartItemsAjax'])->name('cart.count');


//paket
Auth::routes();

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth']], function(){
    Route::post('/landing/booking', [LandingController::class, 'booking'])->name('user.booking');
    Route::put('/landing/checkout/{id}', [LandingController::class, 'Checkout'])->name('user.Checkout');
    Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('user.cart');
    Route::post('/vendor/add', [VendorController::class, 'addVendor'])->name('vendor.add');
    Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
    Route::post('/check-date-availability', [App\Http\Controllers\CartController::class, 'checkDateAvailability'])->name('check.date.availability');

    Route::get('/checkout', [App\Http\Controllers\CartController::class, 'checkoutIndex'])->name('checkout.user');
    Route::get('/pesanan-berhasil', [App\Http\Controllers\CartController::class, 'pesananBerhasil'])->name('pesanan.berhasil');
    Route::get('/dashboard/user', [App\Http\Controllers\LandingController::class, 'dashboardUser'])->name('dashboardUser');
    Route::get('/dashboard/user/pesanan', [App\Http\Controllers\LandingController::class, 'TransaksiUser'])->name('TransaksiUser');
    Route::patch('/dashboard/user/{user}', [LandingController::class, 'update'])->name('user.pengguna.update');






});

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard/paket', [App\Http\Controllers\PaketController::class, 'index'])->name('admin.dashboard.paket');
    Route::post('/dashboard/paket', [App\Http\Controllers\PaketController::class, 'store'])->name('admin.dashboard.paket.store');
    Route::put('/dashboard/paket/{id}', [App\Http\Controllers\PaketController::class, 'update'])->name('admin.dashboard.paket.update');
    Route::delete('/dashboard/paket/{id}', [App\Http\Controllers\PaketController::class, 'destroy'])->name('admin.dashboard.paket.delete');

    Route::get('/dashboard/transaksi', [App\Http\Controllers\BookingController::class, 'index'])->name('admin.transaksi');
    Route::get('/dashboard/transaksi/konfirmasi', [App\Http\Controllers\BookingController::class, 'indexKonfirmasi'])->name('admin.transaksi.2');
    Route::get('/dashboard/transaksi/proses', [App\Http\Controllers\BookingController::class, 'dataBelumKonfrimasi'])->name('admin.transaksi.1');
    Route::get('/dashboard/transaksi/toalk', [App\Http\Controllers\BookingController::class, 'datatolak'])->name('admin.transaksi.3');
    Route::post('/transaksi/konfirmasi/{id}' , [BookingController::class, 'konfirmasi'])->name('admin.transaksi.konfirmasi');


    Route::get('/dashboard/vendor', [VendorController::class, 'index'])->name('admin.vendor');
    Route::post('/dashboard/vendor', [VendorController::class, 'store'])->name('admin.vendor.store');
    Route::put('/dashboard/vendor/{id}', [VendorController::class, 'update'])->name('admin.vendor.update');
    Route::delete('/dashboard/vendor/{id}', [VendorController::class, 'delete'])->name('admin.vendor.delete');

    Route::get('/dashboard/user', [PenggunaController::class, 'index'])->name('admin.pengguna.index');
    Route::get('/dashboard/userAdmin', [PenggunaController::class, 'index2'])->name('admin.pengguna.index2');
    Route::delete('/dashboard/user/{user}', [PenggunaController::class, 'destroy'])->name('admin.pengguna.destroy');
    Route::patch('/dashboard/user/{user}', [PenggunaController::class, 'update'])->name('admin.pengguna.update');
    Route::post('/dashboard/user', [PenggunaController::class, 'store'])->name('admin.pengguna.store');


    Route::get('/dashboard/bank', [BankController::class, 'index'])->name('admin.bank.utama');
    Route::post('/dashboard/bank', [BankController::class, 'store'])->name('admin.bank.store');
    Route::patch('/dashboard/bank/{bank}', [BankController::class, 'update'])->name('admin.bank.update');
    Route::delete('/dashboard/bank/{bank}', [BankController::class, 'destroy'])->name('admin.bank.delete');


    Route::get('/dashboard/testimoni', [TestimoniController::class, 'index'])->name('admin.testimoni.utama');
    Route::post('/dashboard/testimoni', [TestimoniController::class, 'store'])->name('admin.testimoni.store');
    Route::patch('/dashboard/testimoni/{testimoni}', [TestimoniController::class, 'update'])->name('admin.testimoni.update');
    Route::delete('/dashboard/testimoni/{testimoni}', [TestimoniController::class, 'destroy'])->name('admin.testimoni.delete');



    });






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
