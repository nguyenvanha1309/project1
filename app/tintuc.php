<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\tintuc as Authenticatable;
use Illuminate\Notifications\Notifiable;


class tintuc extends Model
{
    //
    public $timestamps = false;
    protected $table = "tintuc";
   
}
