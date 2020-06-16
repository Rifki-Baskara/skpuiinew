<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanSkpPilihan extends Model
{
    protected $casts = [
        'berkas_kegiatan' => 'array'
    ]; 
    protected $table = 'pengajuan_skp_pilihan';
    protected $fillable = ['id', 'nim', 'nama_mhs', 'nama_kegiatan', 'domain_profil', 'aktivitas_kemahasiswaan', 'lokasi', 'penyelenggara', 'level_kegiatan', 'tanggal', 'deskripsi', 'berkas_kegiatan', 'jenjang', 'poin', 'status','komentar'];
}

