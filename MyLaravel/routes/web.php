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
Route::get('trgchu', function () {
    return view('trgchu');
});
// Route::get('log', function () {
//     return view('admin.users.log');
// });
// route::get('log','LoginController@getLogin');
// Route::post('log','LoginController@postLogin');
//
// route::get('dangnhap','LoginController@getLogin');
// Route::post('dangnhap','LoginController@postLogin');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes(['register' => false]);

Route::post('login','AuthController@login') ->name('login');

//thêm sửa xóa user
route::get('user/create','Usercontroller@create');

<<<<<<< HEAD
Route::post('user/create','Usercontroller@store');
=======
Auth::routes(['register' => false]);
route::get('newlist',funtion(){
	return view('newlist');
});
>>>>>>> a174ac4765c2e3351d9a782f4279c30d8b45d99b
