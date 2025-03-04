<?php

use Illuminate\Support\Facades\Route;

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