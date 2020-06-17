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

//SKP Prodi
    //LandingPg
Route::get('/prodi', 'SKPProdiLandingPgController@index');
    //Peserta Kegiatan SKP
Route::get('/prodi/peserta', 'SKPProdiPesertaController@index');
Route::get('/prodi/peserta/show/{skpwajib}', 'SKPProdiPesertaController@show');
Route::get('/prodi/peserta/show/{skpwajib}/createW', 'SKPProdiPesertaController@createW');
Route::post('/prodi/peserta/show/{skpwajib}/storeW', 'SKPProdiPesertaController@storeW');
Route::get('/prodi/peserta/createP', 'SKPProdiPesertaController@createP');
    //Pengajuan SKP Mahasiswa
Route::get('/prodi/pengajuan', 'SKPProdiPengajuanController@index');
Route::get('/prodi/pengajuan/create', 'SKPProdiPengajuanController@create');
    //Rekapitulasi
Route::get('/prodi/rekapitulasi', 'SKPProdiRekapitulasiController@index');

//SKP Non Prodi
    //Landing Pg
Route::get('/nonprodi', 'SKPNonProdiLandingPgController@index');
    //Master Aktivitas
Route::get('/nonprodi/master', 'SKPNonProdiMasterController@index');
Route::get('/nonprodi/master/create', 'SKPNonProdiMasterController@create');
Route::post('/nonprodi/master/store', 'SKPNonProdiMasterController@store');
Route::get('/nonprodi/master/edit/{id}', 'SKPNonProdiMasterController@edit');
Route::post('/nonprodi/master/update/{id}', 'SKPNonProdiMasterController@update');
Route::get('/nonprodi/master/delete/{id}', 'SKPNonProdiMasterController@delete');
    //Peserta Kegiatan
Route::get('/nonprodi/peserta', 'SKPNonProdiPesertaController@index');
Route::get('/nonprodi/peserta/show/{skpwajib}', 'SKPNonProdiPesertaController@show');
Route::get('/nonprodi/peserta/show/{skpwajib}/create', 'SKPNonProdiPesertaController@create');
Route::post('/nonprodi/peserta/show/{skpwajib}/store', 'SKPNonProdiPesertaController@store');
//Route::get('/nonprodi/peserta/tambah', 'SKPNonProdiPesertaController@tambah');

//SKP Super Admin
    //Landing Page
Route::get('/superadmin', 'SKPSuperAdminLandingPgController@index');
    //Master Domain
Route::get('/superadmin/masterD', 'SKPSuperAdminMasterDomainController@index');
Route::get('/superadmin/masterD/create', 'SKPSuperAdminMasterDomainController@create');
Route::post('/superadmin/masterD/store', 'SKPSuperAdminMasterDomainController@store');
Route::get('/superadmin/masterD/edit/{id}', 'SKPSuperAdminMasterDomainController@edit');
Route::post('/superadmin/masterD/update/{id}', 'SKPSuperAdminMasterDomainController@update');
Route::get('/superadmin/masterD/delete/{id}', 'SKPSuperAdminMasterDomainController@delete');
    //Master Aktivitas
Route::get('/superadmin/masterA', 'SKPSuperAdminMasterAktivitasController@index');
Route::get('/superadmin/masterA/createW', 'SKPSuperAdminMasterAktivitasController@createW');
Route::post('/superadmin/masterA/storeW', 'SKPSuperAdminMasterAktivitasController@storeW');
Route::get('/superadmin/masterA/editW/{id}', 'SKPSuperAdminMasterAktivitasController@editW');
Route::post('/superadmin/masterA/updateW/{id}', 'SKPSuperAdminMasterAktivitasController@updateW');
Route::get('/superadmin/masterA/deleteW/{id}', 'SKPSuperAdminMasterAktivitasController@deleteW');
Route::get('/superadmin/masterA/createP', 'SKPSuperAdminMasterAktivitasController@createP');
Route::post('/superadmin/masterA/storeP', 'SKPSuperAdminMasterAktivitasController@storeP');
Route::get('/superadmin/masterA/editP/{id}', 'SKPSuperAdminMasterAktivitasController@editP');
Route::post('/superadmin/masterA/updateP/{id}', 'SKPSuperAdminMasterAktivitasController@updateP');
Route::get('/superadmin/masterA/deleteP/{id}', 'SKPSuperAdminMasterAktivitasController@deleteP');
    //Peserta Kegiatan
Route::get('/superadmin/peserta', 'SKPSuperAdminPesertaController@index');
Route::get('/superadmin/peserta/show/{skpwajib}', 'SKPSuperAdminPesertaController@show');
Route::get('/superadmin/peserta/show/{skpwajib}/createW', 'SKPSuperAdminPesertaController@createW');
Route::post('/superadmin/peserta/show/{skpwajib}/storeW', 'SKPSuperAdminPesertaController@storeW');




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
