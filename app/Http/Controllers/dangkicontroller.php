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

class dangkicontroller extends Controller
{
     public function getdangki(){
         return view('dangki');
     }
     public function postdangki(Request $request){
        $taikhoan = $request['taikhoan'];
        $matkhau = $request['matkhau'];
        $fullname = $request['fullname'];
        $phone = $request['phone'];
        $repassword = $request['repassword'];
        $gender = $request['gender'];

        $validator = validator::make($request->all(),[
            'fullname'=>'min:6|max:20',
            'phone'=>'numeric|regex:/(0)[0-9]{9}/|',
            'taikhoan'=>'min:6|max:20',
            'matkhau'=>'min:6|max:20',
            'repassword'=>'same:matkhau',
          ],[
            'fullname.min'=>'Họ tên ít nhất 6 ký tự',
            'fullname.max'=>'Họ tên không quá 20 ký tự',
            'phone.regex'=>'Số điện thoại chưa chính xác',
            'phone.numeric'=>'số điện thoại phải là số',
            'taikhoan.min'=>'Tài khoản ít nhât 6 ký tự',
            'taikhoan.max'=>'Tài khoản không quá 20 ký tự',
            'matkhau.min'=>'Mật khẩu ít nhât 6 ký tự',
            'matkhau.max'=>'Mật khẩu không quá 20 ký tự',
            'repassword.same'=>'Xác nhận mật khẩu chưa đúng',
           
          ]);  

    $kiemtra = User::where('username','=',$taikhoan)->value('username');    
    echo "$kiemtra"; 
    if ($validator->fails()) {
          return redirect()->back()->withErrors($validator);
        }    
   if ($kiemtra==$taikhoan){
          return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản đã được đăng ký']);
      }
    else{
            $hocvien = new user;
            $hocvien->username = $taikhoan;
            $hocvien->password = bcrypt($matkhau);
            $hocvien->remember_token = 'uxv4fj1iDGqVuZZo4VuP';
            $hocvien->chucVu='2';
            $hocvien->save();

            $userid = User::max('user_id');

            $hocvien1 = new hocvien;
            $hocvien1->tenHV = $fullname;
            $hocvien1->diachi = '';
            $hocvien1->ngaysinh = '2019/04/12';
            $hocvien1->gioitinh = $gender;
            $hocvien1->email = '';
            $hocvien1->user_id = $userid;
            $hocvien1->SDT=$phone;
            $hocvien1->save();
          return redirect()->back()->with(['flag'=>'success','message'=>'Đăng kí thành công']); 
    }
  }
}