<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkpPilihan extends Model
{
    protected $table = 'skp_pilihan';
    protected $fillable = ['domain_profil_lulusan_nama','aktivitas_kemahasiswaan','bukti_kegiatan','poin_skp','jenjang_pendidikan'];
}
