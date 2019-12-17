<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\diem as Authenticatable;
use Illuminate\Notifications\Notifiable;


class diem extends Model
{
    //
    public $timestamps = false;
    protected $table = "diem";
   
}
