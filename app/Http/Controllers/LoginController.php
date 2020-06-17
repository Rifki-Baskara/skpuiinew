<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dpa;

class LoginController extends Controller {

    public function index(){
        return view('login.login');
    }

    public function login(Request $request) {
        if(Auth::guard('mahasiswa')->attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect('/mahasiswa');
        }
        else if (Auth::guard('dpa')->attempt(['username'=>$request->username, 'password'=>$request->password])){
            return redirect('/dpa');

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