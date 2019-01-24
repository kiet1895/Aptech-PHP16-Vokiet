<?php

use App\Http\Controllers\UserController;

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
route::resource('/user','UserController');

// route::get('users/nguoidung','UserController@create')->name('users.nguoidung');
// route::POST('users/store','UserController@store')->name('user.store');
// route::get('user/index','UserController@index')->name('users.index');
// // route::get('user/show/{id}','UserController@show')->name('user.show');
// route::get('user/edit/{id}','UserController@edit')->name('user.edit');
// route::POST('user/update/{id}','UserController@update')->name('user.update');
// route::get('user/destroy/{id}','UserController@destroy')->name('user.destroy');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

