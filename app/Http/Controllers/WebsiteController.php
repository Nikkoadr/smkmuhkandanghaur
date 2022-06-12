<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;

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
    public function store(Request $request)
    {
        $data_valid = $request->validate([
            'id'                => 'required|unique:ppdb',
            'code'              => 'required|unique:ppdb',
            'nama'              => 'required|max:255',
            'jenis_kelamin'     => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required',
            'asal_sekolah'      => 'required',
            'no_hp_siswa'       => 'required|max:15',
            'no_hp_wali'        => 'required|max:15',
            'alamat'            => 'required|max:255',
            'program_keahlian'  => 'required',
            'referensi'         => 'nullable|min:2',
            'tapel'             => 'required|max:5'
        ]);
        Ppdb::create($data_valid);
        return redirect('form_ppdb');
    }
    public function cek_data_ppdb()
    {
        return view('website.ppdb.cek_data_ppdb', ["url" => "cek_data_ppdb"]);
    }
}
