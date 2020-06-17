<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\SkpWajib;
use App\DataMhsSkpWajib;
use App\Http\Requests\DataMhsSkpWajib\Store;

class SKPProdiPesertaController extends Controller
{
    public function index()
    {
        $dataMhs = DataMhsSkpWajib::all();
        $skpwajib = SkpWajib::all();
        return view('SKPProdi.SKPProdi-peserta-kegiatan', compact('skpwajib','dataMhs'));
    }
    public function show(\App\SkpWajib $skpwajib)
    {
        $dataMhs = DataMhsSkpWajib::all();
        return view('SKPProdi.SKPProdi-peserta-kegiatan-showMhs', compact('skpwajib','dataMhs'));
    }
    public function createW(\App\SkpWajib $skpwajib)
    {
        return view('SKPProdi.SKPProdi-peserta-kegiatan-formWajib',compact('skpwajib'));
    }
    public function storeW(Store $request)
    {
        $data = json_decode(request()->get('data'));

        
        foreach ($data as $row) {
        $dataMhs = new DataMhsSkpWajib();
        $dataMhs->mahasiswa_nama = $row[0];
        $dataMhs->mahasiswa_username = $row[1];
        $dataMhs->jenjang_pendidikan = $request->jenjang_pendidikan;
        $dataMhs->aktivitas_kemahasiswaan = $request->aktivitas_kemahasiswaan;
        $dataMhs->skp_wajib_nama_kegiatan = $request->skp_wajib_nama_kegiatan;
        $dataMhs->poin_skp = $request->poin_skp;
        $dataMhs->save();
        }

        return redirect()->back()->with('status','Berhasil menyimpan data mahasiswa');
    }
    public function createP()
    {
        return view('SKPProdi.SKPProdi-peserta-kegiatan-formWajib');
    }
    
}
