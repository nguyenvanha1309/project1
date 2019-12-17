<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\chude;
use App\diem;
use App\video;
use App\hocvien;
use Illuminate\Support\Facades\Validator;

class ttsvcontroller extends Controller
{
     public function gettthv(){
         return view('thongtinhocvien');
     }
     public function posttthv(Request $request){
        $fullname = $request['fullname'];
        $mahocvien = $request['mahocvien'];
        $phone = $request['phone'];
        $ngaysinh = $request['ngaysinh'];
        $diachi = $request['diachi'];
        $gender = $request['gender'];
        $email = $request['email'];

        $validator = validator::make($request->all(),[
            'fullname'=>'min:6|max:20',
            'phone'=>'numeric|regex:/[0-9]{8}/|',
            'diachi'=>'min:6|max:30',
            'email'=>'email'
          ],[
            'fullname.min'=>'Họ tên ít nhất 6 ký tự',
            'fullname.max'=>'Họ tên không quá 20 ký tự',
            'phone.regex'=>'Số điện thoại chưa chính xác',
            'phone.numeric'=>'số điện thoại phải là số',
            'diachi.min'=>'địa chỉ ít nhât 6 ký tự',
            'diachi.max'=>'địa chỉ không quá 30 ký tự',
            'email.email' => 'Email chưa hợp lệ',
           
          ]);  
		    if ($validator->fails()) {
		         return redirect()->back()->withErrors($validator);
		        }

			 	 $insert = array(
	            'tenHV'  => $fullname,
	            'diachi' => $diachi,
	            'ngaysinh' => $ngaysinh,
	            'gioitinh' => $gender,
	            'email' => $email,
	            'SDT' => $phone
         		);

	          $insertData = DB::table('hocvien')->where('maHV', '=', $mahocvien)->update($insert); 
	          return redirect()->back()->with(['flag'=>'success','message'=>'Sửa thành công']); 
		  
		   
     }
}