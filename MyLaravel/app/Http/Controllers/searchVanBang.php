<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\vanbang;

class searchVanBang extends Controller
{
    //
    public function postvanbang(Request $request)
    {
        $msv['masinhvien'] = DB::table('vanbang')->Join('sinhvien', 'vanbang.vanbang_MaSv', '=', 'sinhvien.sinhvien_MaSv')->where
        ([
            'vanbang_MaSv'=> $request->MSV
            ])
        ->select('vanbang.vanbang_MaSv','vanbang.SoHieuVB','vanbang.NamTotNghiep','vanbang.TypeTotNghiep','sinhvien.HoTen','sinhvien.NgaySinh','sinhvien.GioiTinh')->get();
    
        return view('viewsearchvanbang',$msv);
        
    }
    // public function index(){
    //     $users = DB::select('select * from student_details');
    //     return view('stud_view',['users'=>$users]);
    //     }
    //     }
}
