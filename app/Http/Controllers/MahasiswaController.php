<?php

namespace App\Http\Controllers;

use App\DataMhsSkpWajib;
use App\PengajuanSkpPilihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function dashboardSKPMahasiswa()
    {
        $pndi = DataMhsSkpWajib::where ('mahasiswa_username', Auth::guard('mahasiswa')->user()->username)->where ('skp_wajib_nama_kegiatan', 'like', 'PNDI%' )->get();
        $jumlahpndi = 0;
        foreach ($pndi as $pndijumlah) {
            $jumlahpndi = $pndijumlah->poin_skp + $jumlahpndi;
        }
        $pkd = DataMhsSkpWajib::where ('mahasiswa_username', Auth::guard('mahasiswa')->user()->username)->where ('skp_wajib_nama_kegiatan', 'like', 'PKD%' )->get();
        $jumlahpkd = 0;
        foreach ($pndi as $pndijumlah) {
            $jumlahpkd = $pndijumlah->poin_skp + $jumlahpkd;
        }
        $jumlahpilihan = PengajuanSkpPilihan::where ('nim', Auth::guard('mahasiswa')->user()->username)->get();
        $jumlah = 0;
        foreach ($jumlahpilihan as $jml) {
            $jumlah = $jml->poin + $jumlah;
        }
        //dd($jumlahpilihan);
        return view('mahasiswa.dashboard-skp-mahasiswa', compact('pndi', 'jumlahpndi', 'pkd', 'jumlahpkd', 'jumlahpilihan', 'jumlah'));
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
