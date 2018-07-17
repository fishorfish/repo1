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

// Route::get('auth', function(){
// 	return view('auth');
// });


Auth::routes();
Route::get('/', function(){
	return view('auth/register');
});
// Route::get('auth/login', 'Auth\LoginController@getLogin');
Route::post('auth/login', 'Auth\LoginController@postLogin')->name('login');;
Route::get('logout', function(){
		Auth::logout();
		return Redirect::to('/');
});


Route::post('auth/register', 'Auth\RegisterController@postRegister')->name('register');;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('welcome', 'IndexController@index');

