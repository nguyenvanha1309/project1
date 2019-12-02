<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\chude;
use App\diem;

class DangNhapController extends Controller
{
     public function getLogin(){
         return view('dangnhap');
     }
     public function gethome(){
         return view('trangchu');
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

          $username = $request['username'];
       		$password = $request['password'];
          //$user = User::where('chucVu','=','2')->get('username');
          // $user = User::where('chucVu','=','2')->get();
          $chude = chude::where('maCD','=','1')->value('tenChuDe');
          // $chude =DB::table('chude')->get();
         // $diem = diem::all();
          $remember = $request->has('remember') ? true:false;

      	if(Auth::attempt(['username'=>$username,'password'=>$password,'chucVu'=>'2'],$remember)){
      	 //echo $user;
          // echo "$chude";
          // echo "$diem";
          // echo $user;
          // return redirect()->back()->with(['flag'=>'success','message'=>'Thành Công']);
          // setcookie('taikhoan',$username,time()+3600,'/','',0,0);
          // setcookie('matkhau',$password,time()+3600,'/','',0,0);
          session()->put('name',$username);
          session()->put('pass',$password);
          return view('trangchu');
      	}
        if (Auth::attempt(['username'=>$username,'password'=>$password,'chucVu'=>'1'],$remember)){
          echo($chude);
          // echo "$diem";
          // echo $user;
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
