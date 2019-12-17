<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\hocvien as Authenticatable;
use Illuminate\Notifications\Notifiable;


class hocvien extends Model
{
    //
    public $timestamps = false;
    protected $table = "hocvien";
   
}
