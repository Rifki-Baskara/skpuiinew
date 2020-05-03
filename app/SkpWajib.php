<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkpWajib extends Model
{
    //
    protected $table = 'skp_wajib';
    protected $fillable = ['nama_aktivitas','nama_kegiatan','jenjang_pendidikan', 'poin_skp'];
}
