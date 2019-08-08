<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
// khai báo sử dụng loginRequest
use App\Http\Requests\LoginRequest;
use Auth;
use App\User;
class LoginController extends Controller
{
    // public function getLogin(){
    //     return view('admin.users.log');
    // }
    // public function postLogin()
    // {
    //     $MMTK = Input::get('taikhoan');
    //     $password = Input::get('password');
    
    //     if (Auth::attempt(['UserName' => $MMTK, 'PassWord' => $password]))
    //     {
    //         return Redirect::to('admin.layout.index');
    //     } else {
    //         return Redirect::to('log');
    //     }
    // }
    // public function login(Request $request)
    // {  
    //     $user =$request['user'];
    //     $pass =$request['pass'];
    //     if(Auth::attempt(['UserName' => $user  , 'PassWord' => $pass])){
    //         return view("home");
    //     }
    //         else {
    //             return view("trangchu");
    //         }
            
    //     }
    }

