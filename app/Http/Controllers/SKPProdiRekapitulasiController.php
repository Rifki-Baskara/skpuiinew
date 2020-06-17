<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SKPProdiRekapitulasiController extends Controller
{
    public function index()
    {
        return view('SKPProdi.SKPProdi-rekapitulasi');
    }
    public function create()
    {
        return view('SKPProdi.SKPProdi-peserta-formTambah');
    }
}
