<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ctdtController extends Controller
{
     public function getctdt($postname){
     	  return view('chuongtrinhdaotao',compact('postname'));
     }

     public function postctdt(Request $request){
     	return view('chuongtrinhdaotao');
     }
}
