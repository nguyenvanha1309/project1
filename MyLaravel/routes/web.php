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
Route::get('select', function () {
    $result =DB::select('select * from users where id = ?', [1]);
    return $result;

});

Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu', function () {
    return view('trangchu');
});
Route::get('log', function () {
    return view('admin.users.log');
});
Route::get('tracuuvanbang', function () {
    return view('admin.vanbang.tracuuvanbang');
});
Route::get('viewsearchvanbang', function () {
    return view('viewsearchvanbang');
});
Route::get('huongdandangki', function () {
    return view('admin.layout.huongdandangki');
});
Route::get('chuongtrinhdaotao', function () {
    return view('admin.layout.chuongtrinhdaotao');
});

//
Route::post('tracuuvanbang','searchVanBang@postvanbang');
// route::get('dangnhap','LoginController@getLogin');
// Route::post('dangnhap','LoginController@postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


