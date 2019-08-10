<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class searchVanBang extends Controller
{
    //
    public function postvanbang(Request $request)
    {
        $msV =$request ->MSV;
        // $msv = DB::table('vanbang')->select('MaSv')->get();
        $msv = DB::table('vanbang')->Join('sinhvien', 'vanbang.vanbang_MaSv', '=', 'sinhvien.sinhvien_MaSv')->where
        ([
            'vanbang_MaSv'=> $request->MSV
            ])
        ->select('vanbang.SoHieuVB','vanbang.NamTotNghiep','vanbang.TypeTotNghiep','sinhvien.HoTen','sinhvien.NgaySinh','sinhvien.GioiTinh')->get();
        return $msv;
        
    }
}
