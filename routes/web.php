<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('website.home');
});
Route::get('program', function () {
    return view('website.program');
});
Route::get('fasilitas', function () {
    return view('website.fasilitas');
});
Route::get('ekstrakurikuler', function () {
    return view('website.ekstrakurikuler');
});
Route::get('berita', function () {
    return view('website.berita');
});
Route::get('kontak', function () {
    return view('website.kontak');
});
