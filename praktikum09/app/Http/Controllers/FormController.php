<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Buat Fungsi Untuk Menampilkan view Form
    public function index() {
        return view('form');
    }
    //Bikin Fungsi untuk menampilkan hasil inputan form di view hasil
    public function hasil(Request $request) {
        //Validasi Inputannya
        $this->validate($request, [
            'nama' => 'required' ,
            'ttl' => 'required' ,
            'jenis_kelamin' => 'required' ,
            'hobi' => 'required' ,
        ]);
        return view('hasil', ['data' => $request]);
    }
}
