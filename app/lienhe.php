<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\lienhe as Authenticatable;
use Illuminate\Notifications\Notifiable;


class lienhe extends Model
{
    //
    public $timestamps = false;
    protected $table = "lienhe";
   
}
