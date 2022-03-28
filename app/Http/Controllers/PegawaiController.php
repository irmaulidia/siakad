<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $data = pegawai::all();
        return view('pegawai', ['active'=>'active', 'title'=>'Pegawai'], compact('data'));
    }
}
