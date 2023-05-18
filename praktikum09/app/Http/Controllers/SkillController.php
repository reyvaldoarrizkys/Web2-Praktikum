<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Buat Fungsi Untuk Menampilkan view Form
    public function index() {
        return view('skill');
    }
    //Bikin Fungsi untuk menampilkan hasil inputan form di view hasil
    public function skillhasil(Request $request) {
        //Validasi Inputannya
        $this->validate($request, [
            'nama' => 'required' ,
            'email' => 'required' ,
            'lokasi' => 'required' ,
            'jenis_kelamin' => 'required' ,
            'skill' => 'required' ,
        ]);
        return view('skillhasil', ['data' => $request]);
    }
}
