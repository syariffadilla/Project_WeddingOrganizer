<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VendorController;

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

//paket
Auth::routes();

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth']], function(){
    Route::post('/landing/booking', [LandingController::class, 'booking'])->name('user.booking');
    Route::put('/landing/checjout/{id}', [LandingController::class, 'Checkout'])->name('user.Checkout');

    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('user.cart');




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
    Route::post('/transaksi/konfirmasi/{id}' , [BookingController::class, 'konfirmasi'])->name('admin.transaksi.konfirmasi');


    Route::get('/dashboard/vendor', [VendorController::class, 'index'])->name('admin.vendor');
    Route::post('/dashboard/vendor', [VendorController::class, 'store'])->name('admin.vendor.store');
    Route::put('/dashboard/vendor/{id}', [VendorController::class, 'update'])->name('admin.vendor.update');
    Route::delete('/dashboard/vendor/{id}', [VendorController::class, 'delete'])->name('admin.vendor.delete');


    });






// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
