<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('program', [WebsiteController::class, 'program'])->name('program');
Route::get('fasilitas', [WebsiteController::class, 'fasilitas'])->name('fasilitas');
Route::get('ekstrakurikuler', [WebsiteController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('kontak', [WebsiteController::class, 'kontak'])->name('kontak');

Route::get('/home', [HomeController::class, 'index'])->name('home');
