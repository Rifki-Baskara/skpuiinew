<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMhsSkpWajib extends Model
{
    protected $table = 'data_mhs_skp_wajib';
    protected $fillable = ['mahasiswa_nama','mahasiswa_username','jenjang_pendidikan','nama_kegiatan', 'poin_skp'];
}
