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

        $mh = DB::select('select MaMon,TenMon,SoTinChi,SoTiet,KieuMonHoc,MaKhoa from monhoc');
        if($ten==''){
 		 		echo "<script>alert('Bạn Chưa Nhập Thông Tin!!!')</script>";
 		 	}
 		 	var_dump($ten);
        $data['post'] =["4"];
       	//return view('dangki');
 		 foreach ($ten as $kq1 ){
 		 		foreach ($mh as $kq2) {
 		 			$dx=$kq2->MaMon;
 		 			if ($kq1 ==$dx) {
 		 				echo '<table class="table table-bordered">
						      <tr>  
						        <td>'; echo $kq2->MaMon; echo '</td>
						        <td>'; echo $kq2->TenMon; echo' </td>
						        <td>'; echo $kq2->SoTinChi; echo'</td>
						      </tr>

						  </table>'; 
					
						 
 		 			}
 		 		}
            } 
            	  return view('dangki',compact('postname'));

     }

}
