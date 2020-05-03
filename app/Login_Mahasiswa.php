<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login_Mahasiswa extends Authenticatable
{
    protected $table = 'mahasiswa';
}
