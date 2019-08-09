<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException ;
class AuthController extends Controller
{
    //
     public function getLogin(){
     	return view('trangchu');

     }
      public function postLogin(Request $request){
     	$user =$request['name'];
        $pass =$request['password'];
        if (Auth::attempt(['name' => $user,'password' => $pass]))
        {
            echo "đúng";
        } else {
            echo "sai";
        }
      	
     }
}
