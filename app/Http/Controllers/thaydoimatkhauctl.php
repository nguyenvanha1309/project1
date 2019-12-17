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

class thaydoimatkhauctl extends Controller
{
     public function getmatkhau(){
         return view('thaydoimatkhau');
     }
     public function postmatkhau(Request $request){
     	$password = $request['password'];
        $passnew = $request['passnew'];
        $xacnhan = $request['xacnhan'];
        $user = $request['user'];
        $validator = validator::make($request->all(),[
            'password'=>'min:6|max:20',
            'passnew'=>'min:6|max:20',
            'xacnhan'=>'same:passnew',
          ],[
            'password.min'=>'mật khẩu ít nhất 6 ký tự',
            'password.max'=>'mật khẩu không quá 20 ký tự',
            'passnew.min'=>'mật khẩu mới ít nhất 6 ký tự',
            'passnew.max'=>'mật khẩu mới không quá 20 ký tự',
            'xacnhan.same' => 'Xác nhận mật khẩu chưa đúng',  
          ]);  
      //bcrypt
		    if ($validator->fails()){
		         return redirect()->back()->withErrors($validator);
		        }
		    if ($password==$passnew) {
		    return redirect()->back()->with(['flag'=>'danger','message'=>'Mật khẩu phải khác mật khẩu cũ']); }

		    // else{
		     	
		  
			 	 // $insert = array(
	     //         'password' => $passnew,
      //     		);
     	// 		$insertData = DB::table('user')->where('username', '123213')->update($insert); 
	     //      	 return redirect()->back()->with(['flag'=>'success','message'=>'Thay đổi mật khẩu thành công']); 

		    // }
		  
		   
     }
}