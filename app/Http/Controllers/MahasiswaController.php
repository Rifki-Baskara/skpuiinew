<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dashboardSKPMahasiswa()
    {
        return view('mahasiswa.dashboard-skp-mahasiswa');
    }
    public function laporanSKPMahasiswa()
    {
        $mahasiswa = \App\Mahasiswa::all();
        return view('mahasiswa.laporan-skp-mahasiswa',compact('mahasiswa'));
    }
    public function pengajuanSKPPilihan()
    {
        return view('mahasiswa.form-skp-pilihan');
    }
    public function infoSKPMahasiswa()
    {
        return view('mahasiswa.info-skp-mahasiswa');
    }
}
