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
// route::get('dangnhap','LoginController@getLogin');
// Route::post('dangnhap','LoginController@postLogin');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::post('login','AuthController@check');


Auth::routes(['register' => false]);
Route::get('listsv', 'giaovuController@index');
Route::get('createsv', 'giaovuController@create');
Route::get('editsv', 'giaovuController@edit');
Route::post('/store', ['as'=>'store','uses'=>'giaovuController@store']);

