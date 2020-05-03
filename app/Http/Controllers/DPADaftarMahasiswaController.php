<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DPADaftarMahasiswaController extends Controller
{
    public function index()
    {
        return view('dpa.daftar-mahasiswa');
    }
}