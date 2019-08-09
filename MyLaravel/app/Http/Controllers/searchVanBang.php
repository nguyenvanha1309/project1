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
        $msv = DB::table('vanbang')->Join('sinhvien', 'vanbang.MaSv', '=', 'sinhvien.MaSv')->where
        ([
            'MaSv'=> $request->MSV
            ])
        ->select('SoHieuVB','NamTotNghiep','TypeTotNghiep','sinhvien.HoTen','sinhvien.NgaySinh','sinhvien.GioiTinh')->get();
        return $msv;
        
    }
}
