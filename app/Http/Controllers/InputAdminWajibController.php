<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\DataMhsSkpWajib;
use App\Http\Requests\DataMhsSkpWajib\Store;

class InputAdminWajibController extends Controller 
{
    public function inputSKP()
    {
        $skpwajib = \App\SkpWajib::all();
        return view('adminSKPWajib.input-skp',compact('skpwajib'));
    }
    
    public function show(\App\SkpWajib $skpwajib)
    {
        $dataMhs = DataMhsSkpWajib::all();
        return view('adminSKPWajib.daftarMhs-skp-wajib', compact('skpwajib'), compact('dataMhs'));
    }

    /*public function tampil()
    {
        $dataMhs = DataMhsSkpWajib::all(['nama','nim']);
        return view('adminSKPWajib.tambahMhs-skp-wajib',compact('dataMhs'));

    }*/
    public function create(\App\SkpWajib $skpwajib)
    {
        return view('adminSKPWajib.tambahMhs-skp-wajib',compact('skpwajib'));
    }

    public function store(Store $request)
    {
        $data = json_decode(request()->get('data'));

        
        foreach ($data as $row) {
        $dataMhs = new DataMhsSkpWajib();
        $dataMhs->mahasiswa_nama = $row[0];
        $dataMhs->mahasiswa_username = $row[1];
        $dataMhs->jenjang_pendidikan = $request->jenjang_pendidikan;
        $dataMhs->skp_wajib_nama_kegiatan = $request->skp_wajib_nama_kegiatan;
        $dataMhs->poin_skp = $request->poin_skp;
        $dataMhs->save();
        }

        return redirect()->back()->with('status','Berhasil menyimpan data mahasiswa');
    }
}