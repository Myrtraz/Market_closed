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
    return redirect()->route('home');
});

Route::get('/register', 'RegisterController@registerClient')->name('register');
Route::post('/register', 'RegisterController@registered')->name('registered');

Route::get('/login', 'LoginController@loginClient')->name('login');
Route::post('/login', 'LoginController@loggedIn')->name('loggedIn');

Route::get('/home', 'HomeController@homeStart')->name('home');
Route::get('/home/product/{id}', 'HomeController@product')->name('product');


//Rutas Autenticadas por el usuario

Route::group(['middleware' =>'auth'], function() {

	Route::get('/home/sales', 'HomeController@sales')->name('sales');

	Route::get('/home/sales/add', 'SoldController@product')->name('upProduct');
	Route::post('/home/sales/add', 'SoldController@toSell')->name('toSell');

	Route::post('/home/product/buying/resume', 'SoldController@resume')->name('resumen.buy');

	Route::get('/home/product/buying/{id}/{qty}', 'SoldController@buy')->name('buy');
	Route::post('/home/product/buying', 'SoldController@toBuy')->name('toBuy');

	Route::get('/logout', 'LoginController@logout')->name('logout');

	Route::resource('/home/account', 'AccountController');
	Route::post('/home/account', 'AccountController@updatePersonalData')->name('personalData');
});

