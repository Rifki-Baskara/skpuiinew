<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\SkpPilihan;

class AktivitasKemahasiswaanController extends Controller
{
    public function aktivitasKemahasiswaan()
    {
        $skpPilihan = SkpPilihan::all();
        return view('adminSKPPilihan.aktivitas-kemahasiswaan',compact('skpPilihan'));
    }
    public function create()
    {
        $domain = \App\DomainProfilLulusan::all();
        return view('adminSKPPilihan.form-tambah-aktivitasMahasiswa',compact('domain'));
    }
    public function store(Request $request) 
    {
        $request->validate([
            'domain_profil_lulusan_nama' => 'required',
            'aktivitas_kemahasiswaan' => 'required',
            'bukti_kegiatan' => 'required',
            'poin_skp' => 'required',
            'jenjang_pendidikan' => 'required'
        ],
        [
            'domain_profil_lulusan_nama.required' => 'Domain Profil Lulusan Harus Diisi',
            'aktivitas_kemahasiswaan.required' => 'Aktivitas Kemahasiswaan Harus Diisi',
            'bukti_kegiatan.required' => 'Bukti Kegiatan Harus Diisi',
            'poin_skp.required' => 'Poin SKP Harus Diisi',
            'jenjang_pendidikan.required' => 'Jenjang Pendidikan Harus Diisi'

            
        ]);
            $skpPilihan = new SkpPilihan;
            $skpPilihan->domain_profil_lulusan_nama = $request->domain_profil_lulusan_nama;
            $skpPilihan->aktivitas_kemahasiswaan = $request->aktivitas_kemahasiswaan;
            $skpPilihan->bukti_kegiatan = $request->bukti_kegiatan;
            $skpPilihan->poin_skp = $request->poin_skp;
            $skpPilihan->jenjang_pendidikan = implode(",",$request->jenjang_pendidikan);
            $skpPilihan->save();
        return redirect('/adminskppilihan/aktivitas-kemahasiswaan/create')->with('status','SKP Pilihan Berhasil Ditambahkan !');
    }
    public function edit($id)
    {
        $domains = \App\DomainProfilLulusan::all();
        $domain = SkpPilihan::find($id);
        $finds = SkpPilihan::whereId($id)->first();
        $jenjang_pendidikan = explode(",", $finds->jenjang_pendidikan);

        return view('adminSKPPilihan.edit-aktivitas',compact('domain','jenjang_pendidikan','domains'));
    }
    public function update(Request $request, $id)
    {
        $domain = SkpPilihan::find($id);
        
        $request->validate([
            'domain_profil_lulusan_nama' => 'required',
            'aktivitas_kemahasiswaan' => 'required',
            'bukti_kegiatan' => 'required',
            'poin_skp' => 'required',
            'jenjang_pendidikan' => 'required'
        ],
        [
            'domain_profil_lulusan_nama.required' => 'Domain Profil Lulusan Harus Diisi',
            'aktivitas_kemahasiswaan.required' => 'Aktivitas Kemahasiswaan Harus Diisi',
            'bukti_kegiatan.required' => 'Bukti Kegiatan Harus Diisi',
            'poin_skp.required' => 'Poin SKP Harus Diisi',
            'jenjang_pendidikan.required' => 'Jenjang Pendidikan Harus Diisi'
        ]);
        $domain->update ([
            // 'domain_profil_lulusan_nama' =>$request->nama,
            'domain_profil_lulusan_nama' => $request->domain_profil_lulusan_nama,
            'aktivitas_kemahasiswaan' => $request->aktivitas_kemahasiswaan,
            'bukti_kegiatan' => $request->bukti_kegiatan,
            'poin_skp' => $request->poin_skp,
            'jenjang_pendidikan' => implode(",",$request->jenjang_pendidikan)
        ]);
        return redirect('/adminskppilihan/aktivitas-kemahasiswaan')->with('status','SKP Pilihan Berhasil Diubah !');
    }
    public function delete($id)
    {
        $domain = SkpPilihan::find($id);
        $domain->delete($domain);
        return redirect('/adminskppilihan/aktivitas-kemahasiswaan')->with('status','Data Berhasil DiHapus !');
    }
}