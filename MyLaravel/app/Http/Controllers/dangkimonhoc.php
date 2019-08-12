<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class dangkimonhoc extends Controller
{
     public function getdangki(){
     	return view('dangki');
     }
     public function postdangki(Request $request){
     	$allRequest  = $request->all();
        $ten = $allRequest['chonmon'];
        $mh = DB::select('select MaMon,TenMon,SoTinChi,SoTiet,KieuMonHoc,MaKhoa from monhoc');
 		 
 		 foreach ($ten as $kq1 ){
 		 		foreach ($mh as $kq2) {
 		 			$dx=$kq2->MaMon;
 		 			if ($kq1 ==$dx) {
 		 				echo "$dx<br>"; 
						 
 		 			}
 		 		}
            } 

     }
}
