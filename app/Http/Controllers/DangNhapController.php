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

class DangNhapController extends Controller
{
     public function getLogin(){
         return view('dangnhap');
     }
     public function gethome(){
          $result =DB::select('select viewVD,anhVD,motaVD from video');
          $tintuc =DB::select('select viewTinTuc,anhTinTuc,tieuDe from tintuc');
          $hinhanh =DB::select('select viewHA,linkHA from hinhanh');
          rsort($result);
          rsort($tintuc);
          rsort($hinhanh);
           $anhvd = array();
          $motavd = array();
          $anhtintuc = array();
          $motatintuc = array();
          $anhHA = array();
          foreach ($result as $kq ){
              $dx=$kq->anhVD;
              $cx=$kq->motaVD;
              array_push($anhvd,$dx);
              array_push($motavd,$cx);
                }
          foreach ($hinhanh as $kq ){
              $dx=$kq->linkHA;
              array_push($anhHA,$dx);
                }      
          foreach ($tintuc as $kq ){
              $dx=$kq->anhTinTuc;
              $cx=$kq->tieuDe;
              array_push($anhtintuc,$dx);
              array_push($motatintuc,$cx);
                }
         return view('trangchu',compact('anhvd','motavd','anhtintuc','motatintuc','anhHA'));
     }
     public function postLogin(Request $request){
       		// $this->validate($request,[
         //    'username'=>'required|min:6|max:20',
         //    'password'=>'required|min:6|max:20'
         //  ],[
         //    'username.required'=>'Vui lòng nhập tài khoản',
         //    'username.min'=>'Tài khoản ít nhât 6 ký tự',
         //    'username.max'=>'Tài khoản không quá 20 ký tự',
         //    'password.required'=>'Vui lòng nhập mật khẩu',
         //    'password.min'=>'Mật khẩu ít nhât 6 ký tự',
         //    'password.max'=>'Mật khẩu không quá 20 ký tự'
         //  ]);
          $result =DB::select('select viewVD,anhVD,motaVD from video');
          $result2 =DB::select('select user_id from user');
          $tintuc =DB::select('select viewTinTuc,anhTinTuc,tieuDe from tintuc');
          $hinhanh =DB::select('select viewHA,linkHA from hinhanh');
          $username = $request['username'];
       		$password = $request['password'];
          //$user = User::max('user_id');

          $userid = User::where('username','=',$username)->value('user_id');
          $tenhocvien = hocvien::where('user_id','=',$userid)->value('tenHV');
          //$video = video::get('anhVD');
          //$viewvideo = video::get('viewVD');
          rsort($result);
          rsort($tintuc);
          rsort($hinhanh);
          // $chude =DB::table('chude')->get();
         // $diem = diem::all();
          $remember = $request->has('remember') ? true:false;
          
          //sắp xếp ảnh video theo view
          $anhvd = array();
          $motavd = array();
          $anhtintuc = array();
          $motatintuc = array();
          $anhHA = array();
          foreach ($result as $kq ){
              $dx=$kq->anhVD;
              $cx=$kq->motaVD;
              array_push($anhvd,$dx);
              array_push($motavd,$cx);
                }
          foreach ($hinhanh as $kq ){
              $dx=$kq->linkHA;
              array_push($anhHA,$dx);
                }      
          foreach ($tintuc as $kq ){
              $dx=$kq->anhTinTuc;
              $cx=$kq->tieuDe;
              array_push($anhtintuc,$dx);
              array_push($motatintuc,$cx);
                }

      	if(Auth::attempt(['username'=>$username,'password'=>$password,'chucVu'=>'2'],$remember)){
          // return redirect()->back()->with(['flag'=>'success','message'=>'Thành Công']);
          // setcookie('taikhoan',$username,time()+3600,'/','',0,0);
          // setcookie('matkhau',$password,time()+3600,'/','',0,0);
          
          session()->put('name',$username);
          session()->put('tenhocvien',$tenhocvien);
          session()->put('pass','password');
          return view('trangchu',compact('anhvd','motavd','anhtintuc','motatintuc','anhHA'));
      	}
        if (Auth::attempt(['username'=>$username,'password'=>$password,'chucVu'=>'1'],$remember)){
          //echo "$user";
          session()->put('name',$username);
          session()->put('pass',$tenhocvien);
        }
        if (Auth::attempt(['username'=>$username,'password'=>$password,'chucVu'=>'3'],$remember)){
          echo "Trang Admin";
        }
      	else
      	{ 
      		return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản hoặc mật khẩu không đúng']);
      	}
     }


     public function  logout(){
      Auth::logout();
     session()->flush();
      return redirect()->back();
     }
}
