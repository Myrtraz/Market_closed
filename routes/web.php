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
Route::get('/home/vendor', 'AccountController@vendor')->name('vendor');

Route::get('/home/search', 'HomeController@searchBar')->name('search');

Route::get('/home/categories/{id}', 'HomeController@categories')->name('categories');

//Rutas Autenticadas por el usuario

Route::group(['middleware' =>'auth'], function() {

	Route::get('/home/sales', 'SalesController@sales')->name('sales');

	Route::get('/home/sales/add', 'SalesController@product')->name('upProduct');
	Route::post('/home/sales/add', 'SalesController@toSell')->name('toSell');

	Route::post('/home/product/buying/resume', 'SalesController@resume')->name('resumen.buy');

	Route::get('/home/myShopping', 'ShoppingController@myShopping')->name('myShopping');
	Route::get('/home/myShopping/Details', 'ShoppingController@moreDetails')->name('moreDetails');
	Route::get('/home/myProducts', 'SalesController@myProducts')->name('myProducts');

	Route::get('/home/product/buying/{id}/{qty}', 'ShoppingController@buy')->name('buy');
	Route::post('/home/product/buying', 'ShoppingController@toBuy')->name('toBuy');
	Route::post('/home/product/sale', 'ShoppingController@makeSale')->name('make.sale');
	Route::get('/home/product/sale/finish', 'ShoppingController@thankForBuying')->name('thanks');

	Route::get('/logout', 'LoginController@logout')->name('logout');

	Route::resource('/home/account', 'AccountController');
	Route::post('/home/account', 'AccountController@updatePersonalData')->name('personalData');
});

