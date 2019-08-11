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
            $allRequest  = $request->all();
            $ten = $allRequest['name'];
            $matkhau = $allRequest['password'];
            $user = DB::select('select UserName,PassWord,KieuUser from users ­­­­­­­­');
            $sv=DB::select('select sinhvien_MaSv,HoTen from sinhvien ');
            $dem='0';
            $gx='0';
            foreach ($sv as $kq1 ){
                $dx=$kq1->sinhvien_MaSv;
                $fx=$kq1->HoTen;
                if ($ten == $dx){
                    $gx=$fx;
                    break;
                }
            }
            $data['postname'] =[$gx,$ten];
            foreach ($user as $kq ){
                $ex=$kq->UserName;
                $bx=$kq->PassWord;
                $cx=$kq->KieuUser;
            if ($ten == $ex && $matkhau == $bx){
                if($cx=='SV'){
                    return view('trgchu',$data);
                    $dem='1';
                }
                if($cx=="GV"){   
                    return view('sinhvien.create');
                    $dem='1';
                }
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
            }

            if($dem=='0'){
                echo "<script>alert('Bạn Nhập Sai Toài Khoản Hoặc Mật Khẩu!!!')</script>";
                return view('trangchu');
            }

     }
}
