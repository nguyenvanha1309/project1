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
    $result =DB::select('select * from sinhvien ');
    return $result;

});

Route::get('/', function () {
    return view('welcome');
});
Route::get('dangki', function () {
    return view('dangki');
});
// Route::get('trangchu', function () {
//     return view('trangchu');
// });
// Route::get('trgchu', function () {
//     return view('trgchu');
// });
// Route::get('log', function () {
//     return view('admin.users.log');
// });
//thuong
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
Route::get('trangcanhan', function () {
    return view('admin.users.trangcanhan');
});
//viewall
Route::get('viewallSK', 'ViewallController@getviewallSK');
Route::get('viewallTB', 'ViewallController@getviewallTB');
Route::get('viewallTT', 'ViewallController@getviewallTT');

//viewall
//noidungtintuc
Route::get('loaitin/{id}', 'PageController@loaitin');
Route::get('loaitinTT/{id}', 'PageController@loaitinTT');
Route::get('loaitinTB/{id}', 'PageController@loaitinTB');
//nidungtintuc


Route::get('diemhoctap/{postname}', 'dhtController@getdiem' );
Route::post('diemhoctap/{postname}','dhtController@postdiem');
//bientoancuc




Route::post('tracuuvanbang','searchVanBang@postvanbang');
// route::get('dangnhap','LoginController@getLogin');
// Route::post('dangnhap','LoginController@postLogin');
//thuong
Route::get('trangchu','AuthController@getLogin');
Route::post('trangchu','AuthController@postLogin');
Route::post('trgchu','AuthController@postLogin');

Route::get('dangki/{postname}','dangkimonhoc@getdangki');
Route::post('dangki/{postname}','dangkimonhoc@postdangki');

Route::get('chuongtrinhdaotao/{postname}','ctdtController@getctdt');
Route::post('chuongtrinhdaotao/{postname}','ctdtController@postctdt');
// route::get('dangnhap','LoginController@getLogin');
// Route::post('dangnhap','LoginController@postLogin');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Auth::routes(['register' => false]);
Route::get('listsv', 'giaovuController@index');
Route::get('createsv', 'giaovuController@create');
Route::get('editsv', 'giaovuController@edit');
Route::post('/store', ['as'=>'store','uses'=>'giaovuController@store']);


Route::get('diemhoctap/{postname}', 'dhtController@getdiem' );
Route::post('diemhoctap/{postname}','dhtController@postdiem');
