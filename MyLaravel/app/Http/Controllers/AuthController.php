<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\diem;
use App\tintuc;
use App\thongbao;

class AuthController extends Controller
{
    
     public function getLogin(){
        $sukien['sukien'] =DB::table('sukien')->select('date','tieude','noidung','id')->take(4)->get();
        $thongbao['thongbao']=DB::table('thongbao')->select('tieude','noidung','id')->take(19)->get();
        
         return view('trangchu',$sukien,$thongbao);

     }
     public function getGV(){
         return view('giaodienGV');

     }
     

      public function postLogin(Request $request){

            $result =DB::select('select UserName, PassWord from users ');
            $allRequest  = $request->all();
            $ten = $allRequest['name'];
            $matkhau = $allRequest['password'];
            $user = DB::select('select UserName,PassWord,KieuUser from users ­­­­­­­­');
            $sv=DB::select('select MaSv,HoTen from sinhvien ');
            $dem='0';
            $gx='0';
            foreach ($sv as $kq1 ){
                $dx=$kq1->MaSv;
                $fx=$kq1->HoTen;
                if ($ten == $dx){
                    $gx=$fx;
                    break;
                }
            }
            $data['postname'] =$ten;
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
                    return view('giaodienGV');
                    $dem='1';
                }
             }
            if ($ten == "" && $matkhau == "") {
                echo "<script>alert('Bạn Chưa Nhập Thông Tin!!!')</script>";
                return view('admin.users.log');
            }
            if ($ten == "") {
                echo "<script>alert('Bạn Chưa Nhập Tài Khoản!!!')</script>";
                return view('admin.users.log');
            }
            if ($matkhau == "") {
                echo "<script>alert('Bạn Chưa Nhập Mật Khẩu!!!')</script>";
                return view('admin.users.log');
            }
            }

            if($dem=='0'){
                echo "<script>alert('Bạn Nhập Sai Toài Khoản Hoặc Mật Khẩu!!!')</script>";
                return view('admin.users.log');
            }

     }
}
