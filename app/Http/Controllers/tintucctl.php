<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\chude;
use App\baihoc;
use App\diem;
use App\video;
use App\hocvien;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;


class tintucctl extends Controller
{
     public function gettintuc(){
         return view('tintuc');
     }
     public function posttintuc(Request $request){}
}