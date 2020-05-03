<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DPALaporanController extends Controller
{
    public function landingPg()
    {
        return view('dpa.landing-page');
    }
    public function index()
    {
        return view('dpa.laporan-masuk');
    }
}