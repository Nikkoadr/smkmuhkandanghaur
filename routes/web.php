<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PpdbController;

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

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('program', [WebsiteController::class, 'program'])->name('program');
Route::get('fasilitas', [WebsiteController::class, 'fasilitas'])->name('fasilitas');
Route::get('ekstrakurikuler', [WebsiteController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('berita', [WebsiteController::class, 'berita'])->name('berita');
Route::get('kontak', [WebsiteController::class, 'kontak'])->name('kontak');
Route::get('form_ppdb', [WebsiteController::class, 'form_ppdb'])->name('form_ppdb');
Route::post('tambah_peserta_didik_baru_logout', [WebsiteController::class, 'store'])->name('tambah_peserta_didik_baru_logout');
Route::get('cek_data_ppdb', [WebsiteController::class, 'cek_data_ppdb'])->name('cek_data_ppdb');

Auth::routes(['register' => false]);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('admin_ppdb', [PpdbController::class, 'index'])->name('admin_ppdb');
Route::post('tambah_peserta_didik_baru_login', [PpdbController::class, 'store'])->name('tambah_peserta_didik_baru_login');
Route::put('edit_peserta_didik_baru/{id}', [PpdbController::class, 'update']);
