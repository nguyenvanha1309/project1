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

Route::get('trangchu','AuthController@getLogin');
Route::post('trangchu','AuthController@postLogin');
Route::post('trgchu','AuthController@postLogin');
Route::post('giaodienGV','AuthController@postLogin');
Route::get('giaodienGV','AuthController@getGV');

Route::get('dangki/{postname}','dangkimonhoc@getdangki');
Route::post('dangki/{postname}','dangkimonhoc@postdangki');

Route::get('chuongtrinhdaotao/{postname}','ctdtController@getctdt');
Route::post('chuongtrinhdaotao/{postname}','ctdtController@postctdt');


Route::get('lichhoc/{postname}','lichhocController@getlh');
Route::post('lichhoc/{postname}','lichhocController@postlh');

Route::get('xemlichthi/{postname}','lichthiController@getlt');
Route::post('xemlichthi/{postname}','lichthiController@postlt');
// route::get('dangnhap','LoginController@getLogin');
// Route::post('dangnhap','LoginController@postLogin');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['register' => false]);

Auth::routes(['register' => false]);

//công-sinhvien
Route::get('listsv', 'giaovuController@index');
Route::get('createsv', 'giaovuController@create');
Route::get('editsv', 'giaovuController@edit');
Route::get('suasv/{ts}', 'giaovuController@edit'
)->where('ts','[0-9]+');
Route::get('xoasv/{ts}', 'giaovuController@destroy')->where('ts','[0-9]+');
Route::post('/store', ['as'=>'store','uses'=>'giaovuController@store']);

Route::post('/update', ['as'=>'update','uses'=>'giaovuController@update']);
Route::post('/destroy', ['as'=>'destroy','uses'=>'giaovuController@destroy']);

//công-xuly diem
Route::get('listdiem/{mamon}', 'giaovuController@indexdiem');
Route::get('creatediem', 'giaovuController@creatediem');
Route::get('editdiem', 'giaovuController@editdiem');
Route::get('suadiem/{ab}', 'giaovuController@editdiem'
)->where('ab','[0-9]+');
Route::get('xoadiem/{ab}/{xy}', 'giaovuController@destroydiem')->where('ab','[0-9]+');
Route::post('/storediem', ['as'=>'storediem','uses'=>'giaovuController@storediem']);
Route::post('/updatediem', ['as'=>'updatediem','uses'=>'giaovuController@updatediem']);
Route::post('/destroydiem', ['as'=>'destroydiem','uses'=>'giaovuController@destroydiem']);


//công-monhoc
Route::get('danhsachmh', 'giaovuController@indexmh');
Route::get('themmh', 'giaovuController@createmh');
Route::get('xoamh/{ts}', 'giaovuController@destroymh');
Route::post('/storemh', ['as'=>'storemh','uses'=>'giaovuController@storemh']);
Route::post('/destroymh', ['as'=>'destroymh','uses'=>'giaovuController@destroymh']);

//công-lịch thi
Route::get('themlichthi/{ma1}','giaovuController@createlichthi');
Route::get('monhoclichthi', 'giaovuController@indexlichthi');
Route::get('lichthi', 'giaovuController@showlichthi');
Route::get('themlichthi', 'giaovuController@createlichthi');
Route::get('xoalichthi/{ts}', 'giaovuController@destroylichthi');
Route::post('/storelichthi', ['as'=>'storelichthi','uses'=>'giaovuController@storelichthi']);
Route::post('/destroylichthi', ['as'=>'destroylichthi','uses'=>'giaovuController@destroylichthi']);




Route::get('diemhoctap/{postname}', 'dhtController@getdiem' );
Route::post('diemhoctap/{postname}','dhtController@postdiem');


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



//vanbang
Route::post('tracuuvanbang','searchVanBang@postvanbang');

//thongtinsinhvien
Route::get('thongtinsinhvien/{postname}', 'ttsvController@getttsv' );