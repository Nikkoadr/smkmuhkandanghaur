<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.home', ["url" => "home"]);
    }
    public function program()
    {
        return view('website.program', ["url" => "program"]);
    }
    public function fasilitas()
    {
        return view('website.fasilitas', ["url" => "fasilitas"]);
    }
    public function ekstrakurikuler()
    {
        return view('website.ekstrakurikuler', ["url" => "ekstrakurikuler"]);
    }
    public function berita()
    {
        return view('website.berita', ["url" => "berita"]);
    }
    public function kontak()
    {
        return view('website.kontak', ["url" => "kontak"]);
    }
    public function form_ppdb()
    {
        return view('website.ppdb.form_ppdb', ["url" => "form_ppdb"]);
    }
    public function cek_data_ppdb()
    {
        return view('website.ppdb.cek_data_ppdb', ["url" => "cek_data_ppdb"]);
    }
}
