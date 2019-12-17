<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\khoahoc as Authenticatable;
use Illuminate\Notifications\Notifiable;


class khoahoc extends Model
{
    //
    public $timestamps = false;
    protected $table = "khoahoc";
   
}
