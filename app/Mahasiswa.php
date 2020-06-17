<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    public function dpa(){
    	return $this->belongsTo('App\Dpa');
    }
}
