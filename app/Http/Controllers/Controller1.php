<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Controller1 extends Controller
{
    public function tampil1(){
        return view('tampil1');
    }

    public function tampilkan(Request $request){
        // Simpan data yang diinputkan ke dalam database
        $model = new Mahasiswa();
        $model::insert(['nim' => $request->nim, 'nama' => $request->nama, 'alamat' => $request->alamat]);

        // Ambil semua data Mahasiswa
        $mahasiswa = Mahasiswa::all();

        // Kirim data Mahasiswa dan data input ke view 'tampil2'
        return view('tampil2', ['data' => $request->all(), 'mahasiswa' => $mahasiswa]);
    }

    public function logout(){
        return view('logout');
    }
}
