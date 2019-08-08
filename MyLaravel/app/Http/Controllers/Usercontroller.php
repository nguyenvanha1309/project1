<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function create(){
    	return view('user.create');
    }

    public function store(Request $request){
    	$allRequest=$request->all();
    	$kieuuser = $allRequest['KieuUser'];
    	$username = $allRequest['UserName'];
    	$pass = $allRequest['PassWord'];
    	$masv = $allRequest['MaSv'];
    	$magv = $allRequest['MaGv'];
    }
}
