<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_peserta_didik_baru = Ppdb::all();
        return view('admin.admin_ppdb', compact(['data_peserta_didik_baru']), ["url" => "Admin_ppdb"]);
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
        return redirect('admin_ppdb')->with('success', 'Data berhasil ditambahkan');
    }

    public function update($id, Request $request)
    {
        $ppdb = Ppdb::find($id);
        $data_valid = $request->validate([
            'id'                => 'required',
            'code'              => 'required',
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
        $ppdb->update($data_valid);
        return redirect('admin_ppdb')->with('success', 'Data berhasil diedit');
    }

    public function destroy($id)
    {
        $ppdb = Ppdb::find($id);
        $ppdb->delete();
        return redirect('admin_ppdb')->with('success', 'Data berhasil dihapus');
    }
}
