<?php

namespace App\Http\Controllers;

use App\DataMhsSkpWajib;
use Illuminate\Http\Request;
use App\PengajuanSkpPilihan;
use Illuminate\Support\Facades\Auth;
// use App\aktivitas_kemahasiswaan;
use App\DomainProfilLulusan;
use App\SkpPilihan;
use Illuminate\Support\Facades\Storage;

class PengajuanSkpPilihanController extends Controller
{
    public function laporan()
    {
        $pengajuanPilihan = PengajuanSkpPilihan::where ('nim', Auth::guard('mahasiswa')->user()->username)->get();
        $tampilSkpWajib = DataMhsSkpWajib::where ('mahasiswa_username', Auth::guard('mahasiswa')->user()->username)->get();
        return view('mahasiswa.laporan-skp-mahasiswa',compact('pengajuanPilihan', 'tampilSkpWajib'));
    }
    public function create()
    {
        $aktivitas = SkpPilihan::all();
        $domain = DomainProfilLulusan::all();
        return view('mahasiswa.form-skp-pilihan',compact('aktivitas', 'domain'));
    }
    public function store(Request $request) 
    {
            $pengajuanPilihan = new PengajuanSkpPilihan();
            $pengajuanPilihan->nama_kegiatan = $request->nama_kegiatan;
            $pengajuanPilihan->domain_profil = $request->domain_profil;
            $pengajuanPilihan->aktivitas_kemahasiswaan = $request->aktivitas_kemahasiswaan;
            $pengajuanPilihan->lokasi = $request->lokasi;
            $pengajuanPilihan->penyelenggara = $request->penyelenggara;
            $pengajuanPilihan->prestasi = $request->prestasi;
            $pengajuanPilihan->tanggal_mulai = $request->tanggal_mulai;
            $pengajuanPilihan->tanggal_selesai = $request->tanggal_selesai;
            $berkas = $request->file('berkas_kegiatan');
            $temp = [];
            // dd($berkas);
            if(!empty($berkas)):
                foreach($berkas as $berkass):
                    $temp[] = $berkass->getClientOriginalName();
                    // ($berkass->getClientOriginalName());
                    // Storage::put($berkass->getClientOriginalName(), file_get_contents($berkass)); 
                $berkass->move('berkas_pengajuan', /*$request->berkas_kegitaan,*/ $berkass->getClientOriginalName()/*.$ekstensiBerkas*/);
                endforeach;
            endif;    
            $pengajuanPilihan->berkas_kegiatan = $temp;
            // $namaBerkas = ($berkas->getClientOriginalName());
            // // $ekstensiBerkas = ($berkas->getClientOriginalExtension());
            // $pengajuanPilihan->berkas_kegiatan = $namaBerkas;
            // // $pengajuanPilihan->berkas_kegiatan = $ekstensiBerkas;
            // $dirBerkas = 'berkas pengajuan';
            // $berkas->move($dirBerkas, /*$request->berkas_kegitaan,*/ $namaBerkas/*.$ekstensiBerkas*/);
            $pengajuanPilihan->level_kegiatan = $request->level_kegiatan;
            $pengajuanPilihan->deskripsi = $request->deskripsi;
            $pengajuanPilihan->nim = Auth::guard('mahasiswa')->user()->username;
            $pengajuanPilihan->nama_mhs = Auth::guard('mahasiswa')->user()->nama;
            $pengajuanPilihan->status = "Belum Terverifikasi";
            $pengajuanPilihan->jenjang = Auth::guard('mahasiswa')->user()->jenjang_pendidikan;
            $pengajuanPilihan->save();
        return redirect('/mahasiswa/laporan/create')->with('status','Pengajuan berhasil disimpan !');
    }
    public function show($id)
    {
        $show = PengajuanSkpPilihan::find($id);
        return view('mahasiswa.show-pengajuan', compact('show'));
    }   
    public function edit($id)
    {
        $pengajuanPilihan = \App\PengajuanSkpPilihan::all();
        $aktivitas = SkpPilihan::all();
        $domain = DomainProfilLulusan::all();
        $pengajuanPilihan = PengajuanSkpPilihan::find($id);

        return view('mahasiswa.edit-pengajuan-pilihan',compact('pengajuanPilihan', 'id', 'aktivitas', 'domain'));
    }
    public function update(Request $request, $id)
    {
        // dd('memek');
        $pengajuanPilihan = PengajuanSkpPilihan::find($id);
        // Storage::delete($pengajuanPilihan->berkas_kegiatan);
        $berkas = $request->file('berkas_kegiatan');
        if ($berkas !== null):
            // dd($berkas);
            $temp = [];
                if(!empty($berkas)):
                    foreach($berkas as $berkass):
                        $temp[] = $berkass->getClientOriginalName();
                        Storage::put($berkass->getClientOriginalName(), file_get_contents($berkass)); 
                    endforeach;
                endif;    
            $pengajuanPilihan->berkas_kegiatan = $temp;
        endif;
        $pengajuanPilihan->update ([
            'nama_kegiatan' => $request->nama_kegiatan,
            'domain_profil' => $request->domain_profil,
            'aktivitas_kemahasiswaan' => $request->aktivitas_kemahasiswaan,
            'lokasi' => $request->lokasi,
            'penyelenggara' => $request->penyelenggara,
            'prestasi' => $request->prestasi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'berkas_kegiatan' => $berkas = $temp,
            'level_kegiatan' => $request->level_kegiatan,
            'deskripsi' => $request->deskripsi,
            'nim' => Auth::guard('mahasiswa')->user()->username,
            'nama_mhs' => Auth::guard('mahasiswa')->user()->nama,
            'status' => "Belum Terverifikasi",
            'jenjang' => Auth::guard('mahasiswa')->user()->jenjang_pendidikan,
        ]);
            return redirect('/mahasiswa/laporan')->with('status','SKP Pilihan Berhasil Diubah !');
    }
}
