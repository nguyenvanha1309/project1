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
    $result =DB::select('select UserName, PassWord from users where id = ?', [1]);
    return $result;

});

Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu', function () {
    return view('trangchu');
});
// Route::get('log', function () {
//     return view('admin.users.log');
// });
route::get('log','LoginController@getLogin');
Route::post('log','LoginController@postLogin');

// route::get('dangnhap','LoginController@getLogin');
// Route::post('dangnhap','LoginController@postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);
Route::get('listsv', 'giaovuController@index');
Route::get('createsv', 'giaovuController@create');
Route::get('editsv', 'giaovuController@edit');
Route::post('/store', ['as'=>'store','uses'=>'giaovuController@store']);
