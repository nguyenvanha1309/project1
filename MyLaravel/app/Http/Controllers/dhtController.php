<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\diem;
use App\tintuc;
use App\thongbao;

class dhtController extends Controller
{
    public function getdiem($postname){
        return view('diemhoctap',compact('postname'));
    }
    public function postdiem(Request $request,$postname){
        return view('diemhoctap',compact('postname'));
    }
}