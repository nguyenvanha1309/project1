<?php

namespace App\Http\Controllers;
use App\tintuc;
use App\sukien;
Use App\thongbao;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Use_;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function loaitin($id){
        $loaitin['loaitin'] =DB::table('sukien')->where('id','=',$id)->select('*')->get();
         return view('loaitin',$loaitin);

    }
    public function loaitinTT($id){
        $loaitinTT['loaitin'] =DB::table('tintuc')->where('id','=',$id)->select('*')->get();
         return view('loaitin',$loaitinTT);

    }
    public function loaitinTB($id){
        $loaitinTB['loaitin'] =DB::table('thongbao')->where('id','=',$id)->select('*')->get();
         return view('loaitin',$loaitinTB);

    }
}
