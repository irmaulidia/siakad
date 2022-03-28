<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    public function index(){
        
        $data = pelanggan::paginate(5);
        return view('pelanggan', ['active'=>'active', 'title'=>'Pelanggan'], compact('data'));
    }
}