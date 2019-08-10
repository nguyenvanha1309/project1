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
    public function getLogin(){
        return view('admin.users.log');
    }
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
    public function postLogin(Request $request)
    {
        $mktk =$request ->taikhoan;
        $pass =$request ->password;
        if(Auth::attempt(['UserName' => $mktk  , 'PassWord' => $pass])){
            return Redirect::to('admin.layout.index');
        }
            else {
                return Redirect::to('log');
            }
            
        }
    }

