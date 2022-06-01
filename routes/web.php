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
    return view('website.home', ["url" => "home"]);
});
Route::get('program', function () {
    return view('website.program', ["url" => "program"]);
});
Route::get('fasilitas', function () {
    return view('website.fasilitas', ["url" => "fasilitas"]);
});
Route::get('ekstrakurikuler', function () {
    return view('website.ekstrakurikuler', ["url" => "ekstrakurikuler"]);
});
Route::get('berita', function () {
    return view('website.berita', ["url" => "berita"]);
});
Route::get('kontak', function () {
    return view('website.kontak', ["url" => "kontak"]);
});
