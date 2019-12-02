<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('dangnhap','DangNhapController@getLogin');
Route::post('dangnhap','DangNhapController@postLogin');
Route::post('trangchu','DangNhapController@postLogin');
Route::get('trangchu','DangNhapController@gethome');
Route::get('logout','DangNhapController@logout');
