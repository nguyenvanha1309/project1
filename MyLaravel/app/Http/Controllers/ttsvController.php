<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\diem;
use App\tintuc;
use App\thongbao;
use App\sinhvien;

class ttsvController extends Controller
{
    public function getttsv($postname){
        return view('thongtinsinhvien',compact('postname'));
    }
    // public function postttsv(Request $request,$postname){
    //     return view('thongtinsinhvien',compact('postname'));
    // }
}