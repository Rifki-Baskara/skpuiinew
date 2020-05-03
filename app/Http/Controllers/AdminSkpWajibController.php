<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\SkpWajib;

class AdminSkpWajibController extends Controller
{
    public function landingPg()
    {
        return view('adminSKPWajib.landing-page');
    }

    public function infoSKPWajib()
    {
        $skpwajib = SkpWajib::all();
        return view('adminSKPWajib.info-skp-wajib',compact('skpwajib'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminSKPWajib.form-skp-wajib');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_aktivitas' => 'required',
            'nama_kegiatan' => 'required',
            'jenjang_pendidikan' => 'required',
            'poin_skp' => 'required'
        ],
        [
            'nama_aktivitas.required' => 'Nama Aktivitas Harus Diisi',
            'nama_kegiatan.required'  => 'Nama Kegiatan Harus Diisi',
            'jenjang_pendidikan.required'  => 'Jenjang Pendidikan Harus Diisi',
            'poin_skp.required'  => 'Poin SKP Harus Diisi'
        ]);

        $skpwajib = new SkpWajib;
        $skpwajib->nama_aktivitas = $request->nama_aktivitas;
        $skpwajib->nama_kegiatan = $request->nama_kegiatan;
        $skpwajib->jenjang_pendidikan = $request->jenjang_pendidikan;
        $skpwajib->poin_skp = $request->poin_skp;

        $skpwajib->save();

        return redirect('/adminskpwajib/infoskpwajib')->with('status','SKP Wajib Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminSkpWajib  $adminSkpWajib
     * @return \Illuminate\Http\Response
     */
    public function show(SkpWajib $skpwajib)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminSkpWajib  $adminSkpWajib
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skpwajib = SkpWajib::find($id);
        return view('adminSKPWajib.edit-skp-wajib',compact('skpwajib'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminSkpWajib  $adminSkpWajib
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $skpwajib = SkpWajib::find($id);
        
        $request->validate([
            'nama_aktivitas' => 'required',
            'nama_kegiatan' => 'required',
            'jenjang_pendidikan' => 'required',
            'poin_skp' => 'required'
        ],
        [
            'nama_aktivitas.required' => 'Nama Aktivitas Harus Diisi',
            'nama_kegiatan.required'  => 'Nama Kegiatan Harus Diisi',
            'jenjang_pendidikan.required'  => 'Jenjang Pendidikan Harus Diisi',
            'poin_skp.required'  => 'Poin SKP Harus Diisi'
        ]);
        $skpwajib->update ([
            'nama_aktivitas' =>$request->nama_aktivitas,
            'nama_kegiatan' =>$request->nama_kegiatan,
            'jenjang_pendidikan' =>$request->jenjang_pendidikan,
            'poin_skp' =>$request->poin_skp,
        ]);
        return redirect('/adminskpwajib/infoskpwajib')->with('status','SKP Wajib Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminSkpWajib  $adminSkpWajib
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminSkpWajib $skpwajib)
    {

    }
    public function delete($id)
    {
        $skpwajib = SkpWajib::find($id);
        $skpwajib->delete($skpwajib);
        return redirect('/adminskpwajib/infoskpwajib')->with('status','SKP Wajib Berhasil DiHapus !');
    }
}
