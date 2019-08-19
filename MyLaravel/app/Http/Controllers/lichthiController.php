<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lichthiController extends Controller
{
     public function getlt($postname){
     	  return view('xemlichthi',compact('postname'));
     }

     public function postlt(Request $request,$postname){
     	 return view('xemlichthi',compact('postname'));
     	}
}
