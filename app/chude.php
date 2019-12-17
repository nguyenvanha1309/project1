<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\chude as Authenticatable;
use Illuminate\Notifications\Notifiable;


class chude extends Model
{
    //
    public $timestamps = false;
    protected $table = "chude";
   
}
