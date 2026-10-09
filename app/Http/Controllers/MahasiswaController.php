<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //tampilkan form input
    public function form()
    {
        return view('form');
    }

    //simpan data dari form
    public function simpan(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan
        ]);

        return "Data mahasiswa berhasil disimpan!";
    }

    //tampilkan daftar mahasiswa
    public function daftar(){
        $data = Mahasiswa::all();
        return view('daftar', compact('data'));
    }
}
