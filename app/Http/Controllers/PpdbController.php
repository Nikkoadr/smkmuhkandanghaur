<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
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
    public function put()
    {
        //
    }
    public function store()
    {
        //
    }
}
