<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $mahasiswa = Mahasiswa::paginate(3); // Mengambil sebagian isi tabel
        $posts = Mahasiswa::orderBy('nim', 'desc')->paginate(3);
        return view('mahasiswa.index', compact('mahasiswa'));
        with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required', 
            'email' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            ]);

        //fungsi eloquent untuk menambah data
        Mahasiswa::create($request->all());
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Mahasiswa = $mahasiswa;
        return view('mahasiswa.detail', compact('Mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Mahasiswa = $mahasiswa;
        return view('mahasiswa.edit', compact('Mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
        ]);
        Mahasiswa::where('id_mahasiswa', $mahasiswa->id_mahasiswa)->update($validateData);
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diubah');
    }
    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::where('id_mahasiswa', $mahasiswa->id_mahasiswa)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
    public function search(Request $request){
        $keyword = $request -> search;
        $mahasiswa = Mahasiswa::where('nama','like',"%". $keyword . "%") -> paginate(3);
        return view(view: 'mahasiswa.index', data: compact( var_name:'mahasiswa'));
    }
};