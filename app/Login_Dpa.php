<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login_Dpa extends Authenticatable
{
    protected $table = 'dpa';
}
