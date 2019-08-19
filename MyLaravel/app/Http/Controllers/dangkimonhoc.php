<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class dangkimonhoc extends Controller
{	 public function getdangki($postname){
     	  return view('dangki',compact('postname'));
     }

     public function postdangki(Request $request,$postname){
     	$allRequest  = $request->all();
        $ten = $allRequest['chonmon'];
        // var_dump($ten);
        $mh = DB::select('select MaMon,TenMon,SoTinChi,SoTiet,MaKhoa,tuchon,batbuoc from monhoc');
        $mhdk=DB::select('select MaMon from dangky');
 		 foreach ($ten as $kq1 ){
 		 		foreach ($mh as $kq2) {
 		 			$dx=$kq2->MaMon;
 		 			$cx=$kq2->TenMon;
 		 			$ex=$kq2->SoTinChi;
 		 			$kx=$kq2->SoTiet;
                    $mx=$kq2->tuchon;
                    $gx=$kq2->batbuoc;
 		 			if ($kq1==$dx) {
                         foreach ($mhdk as $key1 ) {
                             $ma1 = $key1->MaMon;
                             $check = 1;
                             if ($ma1 == $kq1) {
                                 $check = 2;
                                 break;
                             }
                         }
                         if ($check == 1) {
                              $datadangki = array(
                                'MaMon'  => $dx,
                                'TenMon' => $cx,
                                'SoTinChi' => $ex,
                                'SoTiet' => $kx,
                                'MaSv'=>$postname,
                                'tuchon' =>$mx,
                                'batbuoc'=>$gx,
                                 );
                              $insertData = DB::table('dangky')->insert($datadangki);
                         }
                         else{
            
                         }


 		 			}
 		 		}
            } 
            	  return view('lichhoc',compact('postname'));


           }

}
