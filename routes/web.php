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

	Route::group([], function (){
		Route::get('/home/sales', 'SalesController@sales')->name('sales');
		Route::get('/home/sales/add', 'SalesController@product')->name('upProduct');
		Route::post('/home/sales/add', 'SalesController@toSell')->name('toSell');
		Route::get('/home/myProducts', 'SalesController@myProducts')->name('myProducts');
	});

	Route::group([], function (){
		Route::get('/home/myShopping', 'ShoppingController@myShopping')->name('myShopping');
		Route::get('/home/myShopping/Details/{id}', 'ShoppingController@moreDetails')->name('moreDetails');
		Route::get('product/summary', 'ShoppingController@buy')->name('buy');
		Route::post('/home/product/sales', 'ShoppingController@toBuy')->name('toBuy');
		Route::post('/home/product/sale', 'ShoppingController@makeSale')->name('make.sale');
		Route::get('credit/set/{id}','CardController@setCard')->name('setCard');
		Route::get('/home/product/summary/payment', 'ShoppingController@creditCard')->name('creditCard');
		Route::post('/home/product/summary/payment', 'ShoppingController@creditCard')->name('creditCard.post');
		Route::get('/home/product/summary/payment/cvv', 'CardController@secretCode')->name('cvvCode');
		Route::get('/home/product/sales/credit/dues', 'ShoppingController@dues')->name('dues');
		Route::get('/home/product/sale/finish', 'ShoppingController@thankForBuying')->name('thanks');
	});

	Route::group([], function (){
		Route::get('/home/account/address/set/{id}','AccountController@setAddress')->name('setAddress');
		Route::get('/home/account/address', 'AccountController@Addresses')->name('addresses');
		Route::post('/home/account/address', 'AccountController@myAddresses')->name('myAddresses');
		Route::resource('/home/account', 'AccountController');
		Route::post('/home/account', 'AccountController@updatePersonalData')->name('personalData');
	});	
});

	Route::get('/home/account/credit/add','CardController@cardAdd')->name('cardAdd');
	Route::post('/home/account/credit/add','CardController@cardAddPost')->name('cardAddPost');
	Route::get('/logout', 'LoginController@logout')->name('logout');

	
