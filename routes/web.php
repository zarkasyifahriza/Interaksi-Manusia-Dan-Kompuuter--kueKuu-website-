<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/roti', function () {
    return view('rotipage');
});
Route::get('/cake', function () {
    return view('cakepage');
});
Route::get('/tart', function () {
    return view('tartpage');
});
Route::get('/tentang-kami', function () {
    return view('landingpage'); // Mengarahkan ke landing page
});
Route::get('/pastry', function () {
    return view('pastrypage');
});
Route::get('/kuekering', function () {
    return view('kuekeringpage');
});
Route::get('/kuebasah', function () {
    return view('kuebasahpage');
});
Route::get('/lokasibangkalan', function () {
    return view('lokasibangkalan');
});
Route::get('/lokasisampang', function () {
    return view('lokasisampang');
});
Route::get('/lokasipamekasan', function () {
    return view('lokasipamekasan');
});
Route::get('/lokasisumenep', function () {
    return view('lokasisumenep');
});
Route::get('/detailproduk', function () {
    return view('detailproduk');
});
Route::get('/suksestambahkeranjang', function () {
    return view('suksestambahkeranjang');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/detailproduk/{id}', [ProdukController::class, 'showDetail'])->name('detailproduk');
Route::get('/roti', [ProdukController::class, 'showRotiPage']);
Route::get('/cake', [ProdukController::class, 'showCakePage']);
Route::get('/tart', [ProdukController::class, 'showTartPage']);
Route::get('/pastry', [ProdukController::class, 'showPastryPage']);
Route::get('/kuekering', [ProdukController::class, 'showKuekeringPage']);
Route::get('/kuebasah', [ProdukController::class, 'showKuebasahPage']);
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

