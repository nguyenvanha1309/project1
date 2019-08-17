<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\diem;
use App\tintuc;
use App\thongbao;

class ViewallController extends Controller{
    public function getviewallSK(){
        $sukien['sukien'] =DB::table('sukien')->select('date','tieude','noidung','id')->get();
        return view('viewallSK',$sukien);
    }
    public function getviewallTB(){
        $thongbao['thongbao']=DB::table('thongbao')->select('tieude','noidung','id')->get();
        return view('viewallTB',$thongbao);
    }
    public function getviewallTT(){
        $tintuc['tintuc']=DB::table('tintuc')->select('tieude', 'date', 'anh', 'id')->get();
        return view('viewallTT',$tintuc);
    }
}