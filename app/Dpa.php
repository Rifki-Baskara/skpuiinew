<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dpa extends Model
{
    protected $table = 'mahasiswa';


    public function mahasiswas()
    {
        return $this->hasMany('App\Mahasiswa');
    }
}
