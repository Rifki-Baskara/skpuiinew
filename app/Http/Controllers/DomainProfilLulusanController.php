<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\DomainProfilLulusan;

class DomainProfilLulusanController extends Controller
{
    public function landingPg() 
    {
        return view('adminSKPPilihan.landing-page');
    }
    public function domainProfil()
    {
        $domain = DomainProfilLulusan::all();
        return view('adminSKPPilihan.domain-profil-lulusan',compact('domain'));
    }
    public function create()
    {
        return view('adminSKPPilihan.form-tambah-domain');
    }
    public function store(Request $request) 
    {
        $request->validate([
            'nama' => 'required',
        ],
        [
            'nama.required' => 'Domain Profil Lulusan Harus Diisi'
        ]);

        $domain = new DomainProfilLulusan;
        $domain->nama = $request->nama;

        $domain->save();
        return redirect('/adminskppilihan/domainprofil/create')->with('status','Domain Profil Lulusan Berhasil Ditambahkan !');
    }
    public function edit($id)
    {
        $domain = DomainProfilLulusan::find($id);
        return view('adminSKPPilihan.edit-domain',compact('domain'));
    }
    public function update(Request $request, $id)
    {
        $domain = DomainProfilLulusan::find($id);
        
        $request->validate([
            'nama' => 'required'
        ],
        [
            'nama.required' => 'Domain Profil Lulusan Harus Diisi'
        ]);
        $domain->update ([
            'nama' =>$request->nama,
        ]);
        return redirect('/adminskppilihan/domainprofil')->with('status','Domain Profil Lulusan Berhasil Diubah !');
    }
    public function delete($id)
    {
        $domain = DomainProfilLulusan::find($id);
        $domain->delete($domain);
        return redirect('/adminskppilihan/domainprofil')->with('status','Data Berhasil DiHapus !');
    }
}