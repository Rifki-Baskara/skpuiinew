<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mahasiswa;

class LoginController extends Controller {

    public function index(){
        return view('login.login');
    }

    public function login(Request $request) {
        // $mahasiswa = Mahasiswa::attempt('username',$request->username)->attempt('password',$request->password)->get();
        // if(count($mahasiswa)>0){
        //     Auth::guard('mahasiswa')->LoginUsingId($mahasiswa[0]['id']);
        //     return redirect('/mahasiswa');
        // }
        if(Auth::guard('mahasiswa')->attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect('/mahasiswa');
        }
        else{
            return "Gagal Login";
        }
    }

    public function logout(){
        if(Auth::guard('mahasiswa')->check()){
            Auth::guard('mahasiswa')->logout();
        }
        return redirect('/login');
    }
}