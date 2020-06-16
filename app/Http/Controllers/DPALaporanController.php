<?php

namespace App\Http\Controllers;
use App\PengajuanSkpPilihan;
use App\Dpa;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DPALaporanController extends Controller
{
    public function landingPg()
    {
        return view('dpa.landing-page');
    }
    public function skpmasuk()
    {
        $skpmasuk = PengajuanSkpPilihan::leftJoin('mahasiswa', 'mahasiswa.username', 'pengajuan_skp_pilihan.nim')
        ->select('pengajuan_skp_pilihan.*','mahasiswa.dpa_id')
        ->where ('status', '=', 'Belum Terverifikasi')
        ->where('mahasiswa.dpa_id', Auth::guard('dpa')->user()->id)->get();
        //dd($skpmasuk);
        //$mhs = Mahasiswa::where('dpa_id', Auth::guard('dpa')->user()->id)->get();
        //dd($mhs);
        //$skpmasuk = PengajuanSkpPilihan::Latest()->where ('jenjang' , '=', 'Sarjana')->get();
        //dd($skpmasuk);
        return view('dpa.laporan-masuk', compact('skpmasuk'));
    }

    public function show($id)
    {
        $detail = PengajuanSkpPilihan::find($id);

        return view('dpa.verifikasi-pengajuan', compact('detail'));
    }

    // public function edit($id)
    // {
    //     $pengajuanPilihan = \App\PengajuanSkpPilihan::all();
    //     $pengajuanPilihan = PengajuanSkpPilihan::find($id);

    //     return view('dpa.verifikasi-pengajuan',compact('pengajuanPilihan'));
    // }
    public function update(Request $request, $id)
    {
        $detail = PengajuanSkpPilihan::find($id);
        //dd($request->komentar);
        $detail->update ([
            'poin' => $request->poin,
            'status' => $request->status,
            'komentar' => $request->komentar,

        ]);
        
        return redirect('/dpa/laporan');
    }

    public function tampil()
    {
        $daftarmhs = Mahasiswa::where ('dpa_id', Auth::guard('dpa')->user()->id)->get();
        return view('dpa.daftar-mahasiswa',compact('daftarmhs'));
    }
}