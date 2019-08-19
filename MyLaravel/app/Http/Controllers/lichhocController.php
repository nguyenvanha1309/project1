<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lichhocController extends Controller
{
     public function getlh($postname){
     	  return view('lichhoc',compact('postname'));
     }

     public function postlh(Request $request,$postname){
     	 return view('lichhoc',compact('postname'));
     	}
}
