<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;

class BarangController extends Controller
{
    public function index()
    {
        //
        $data = barang::all();
        return view('barang', ['active'=>'active', 'title'=>'Barang'], compact('data'));
    }
}
