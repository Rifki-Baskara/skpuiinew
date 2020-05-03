<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->middleware('guest');
Route::post('/login/kirimdata', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//ADMIN SKP WAJIB
Route::get('/adminskpwajib', 'AdminSKPWajibController@landingPg');
Route::get('/adminskpwajib/infoskpwajib/', 'AdminSKPWajibController@infoSKPWajib');
Route::get('/adminskpwajib/infoskpwajib/create', 'AdminSKPWajibController@create');
Route::post('/adminskpwajib/infoskpwajib/store', 'AdminSKPWajibController@store');
Route::get('/adminskpwajib/infoskpwajib/delete/{id}', 'AdminSKPWajibController@delete');
Route::get('/adminskpwajib/infoskpwajib/edit/{id}', 'AdminSKPWajibController@edit');
Route::post('/adminskpwajib/infoskpwajib/update/{id}', 'AdminSKPWajibController@update');
    //HAL. Input
Route::get('/adminskpwajib/input', 'InputAdminWajibController@inputSKP');
Route::get('/adminskpwajib/input/show/{skpwajib}', 'InputAdminWajibController@show');
Route::get('/adminskpwajib/input/show/{skpwajib}/tambah', 'InputAdminWajibController@create');
Route::post('/adminskpwajib/input/show/{skpwajib}/store', 'InputAdminWajibController@store');

//ADMIN SKP PILIHAN
Route::get('/adminskppilihan', 'DomainProfilLulusanController@landingPg');
    //Domain profil
Route::get('/adminskppilihan/domainprofil', 'DomainProfilLulusanController@domainProfil');
Route::get('/adminskppilihan/domainprofil/create', 'DomainProfilLulusanController@create');
Route::post('/adminskppilihan/domainprofil/store', 'DomainProfilLulusanController@store');
Route::get('/adminskppilihan/domainprofil/edit/{id}', 'DomainProfilLulusanController@edit');
Route::post('/adminskppilihan/domainprofil/update/{id}', 'DomainProfilLulusanController@update');
Route::get('/adminskppilihan/domainprofil/delete/{id}', 'DomainProfilLulusanController@delete');
    //Aktivitas Kemahasiswaan
Route::get('/adminskppilihan/aktivitas-kemahasiswaan', 'AktivitasKemahasiswaanController@aktivitasKemahasiswaan');
Route::get('/adminskppilihan/aktivitas-kemahasiswaan/create', 'AktivitasKemahasiswaanController@create');
Route::post('/adminskppilihan/aktivitas-kemahasiswaan/store', 'AktivitasKemahasiswaanController@store');
Route::get('/adminskppilihan/aktivitas-kemahasiswaan/edit/{id}', 'AktivitasKemahasiswaanController@edit');
Route::post('/adminskppilihan/aktivitas-kemahasiswaan/update/{id}', 'AktivitasKemahasiswaanController@update');
Route::get('/adminskppilihan/aktivitas-kemahasiswaan/delete/{id}', 'AktivitasKemahasiswaanController@delete');

//DPA
Route::get('/dpa', 'DPALaporanController@landingPg');
    //Laporan
Route::get('/dpa/laporan', 'DPALaporanController@index');
    //Daftar Mhs
Route::get('/dpa/daftar', 'DPADaftarMahasiswaController@index');


//MAHASISWA
Route::get('/mahasiswa', 'MahasiswaController@dashboardSKPMahasiswa')->middleware('auth:mahasiswa');
Route::get('/mahasiswa/laporan', 'MahasiswaController@laporanSKPMahasiswa')->middleware('auth:mahasiswa');
Route::get('/mahasiswa/laporan/create', 'MahasiswaController@pengajuanSKPPilihan')->middleware('auth:mahasiswa');

Route::get('/mahasiswa/infoskp', 'MahasiswaController@infoSKPMahasiswa')->middleware('auth:mahasiswa');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
