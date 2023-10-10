<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;
use Yajra\DataTables\DataTables;
use App\Models\Absen;
use Illuminate\Support\Carbon;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.home', ["url" => "Home"]);
    }

    public function program()
    {
        return view('website.program', ["url" => "Keahlian"]);
    }

    public function fasilitas()
    {
        return view('website.fasilitas', ["url" => "Fasilitas"]);
    }

    public function ekstrakurikuler()
    {
        return view('website.ekstrakurikuler', ["url" => "Ekstrakurikuler"]);
    }

    public function berita()
    {
        return view('website.berita', ["url" => "Berita"]);
    }

    public function kontak()
    {
        return view('website.kontak', ["url" => "Kontak"]);
    }
}
