<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    //
     public function getLogin(){
     	return view('trangchu');

     }
      public function postLogin(Request $request){

            $result =DB::select('select UserName, PassWord from users ');
            //var_dump($result);
            $allRequest  = $request->all();
            $ten = $allRequest['name'];
            $matkhau = $allRequest['password'];
             
            $user = DB::select('select UserName from users ­­­­­­­­');
            $pass = DB::select('select PassWord from users ­­­­­­­­');
          
            foreach ($user as $kq ){
                $ex=$kq->UserName;
                 foreach ($pass as $kq1 ){
                    $bx=$kq1->PassWord;
            if ($ten == $ex && $matkhau == $bx) {
                return view('trgchu');
             }
            if ($ten == "" && $matkhau == "") {
                echo "<script>alert('Bạn Chưa Nhập Thông Tin!!!')</script>";
                return view('trangchu');
            }
            if ($ten == "") {
                echo "<script>alert('Bạn Chưa Nhập Tài Khoản!!!')</script>";
                return view('trangchu');
            }
             if ($matkhau == "") {
                echo "<script>alert('Bạn Chưa Nhập Mật Khẩu!!!')</script>";
                return view('trangchu');
            }
            if ($ten != $ex && $matkhau != $bx) {
                echo "<script>alert('Tài Khoản Hoặc Mật Khẩu Không Đúng!!!')</script>";
                return view('trangchu');
             }
        }}
     
     }
}
