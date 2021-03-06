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



Route::get('/', 'HomeController@homeStart');

Route::group([], function (){
	Route::get('/register', 'RegisterController@registerClient')->name('register');
	Route::post('/register', 'RegisterController@registered')->name('registered');
	Route::get('/login', 'LoginController@loginClient')->name('login');
	Route::post('/login', 'LoginController@loggedIn')->name('loggedIn');
});

Route::group([], function (){
	Route::get('/home', 'HomeController@homeStart')->name('home');
	Route::get('home/product/{id}', 'HomeController@product')->name('product');
	Route::get('/vendor', 'AccountController@vendor')->name('vendor');
	Route::get('/search', 'HomeController@searchBar')->name('search');
	Route::get('/categories/{id}', 'HomeController@categories')->name('categories');
});



//Rutas Autenticadas por el usuario
Route::group(['middleware' =>'auth'], function() {

//Rutas SalesController
	Route::group([], function (){
		Route::get('sales', 'SalesController@sales')->name('sales');
		Route::get('/sales/add', 'SalesController@product')->name('upProduct');
		Route::post('sales/add', 'SalesController@toSell')->name('toSell');
		Route::get('/myProducts', 'SalesController@myProducts')->name('myProducts');
	});

//Rutas ShoppingController
	Route::group([], function (){
		Route::get('/myShopping', 'ShoppingController@myShopping')->name('myShopping');
		Route::get('/myShopping/Details/{id}', 'ShoppingController@moreDetails')->name('moreDetails');
		Route::get('product/summary', 'ShoppingController@buy')->name('buy');
		Route::post('/product/sales', 'ShoppingController@toBuy')->name('toBuy');
		Route::post('/product/sale', 'ShoppingController@makeSale')
		->name('make.sale');
		Route::get('/order/make', 'ShoppingController@makeOrder')->name('makeOrder');
		Route::get('payment/finish', 'ShoppingController@thankForBuying')->name('thanks');
	});

//Rutas de AccountController
	Route::group([], function (){
		Route::get('/account/address/set/{id}','AccountController@setAddress')->name('setAddress');
		Route::get('/account/address', 'AccountController@Addresses')->name('addresses');
		Route::post('/account/address', 'AccountController@myAddresses')->name('myAddresses');
		Route::resource('/account', 'AccountController');
		Route::post('/account', 'AccountController@updatePersonalData')->name('personalData');
	});	

//Rutas  de CardController
	Route::group([], function(){
		Route::get('/account/credit/add','CardController@cardAdd')->name('cardAdd');
		Route::post('/account/credit/add','CardController@cardAddPost')->name('cardAddPost');
		Route::get('credit/set/{id}','CardController@setCard')->name('setCard');
		Route::get('/product/summary/payment', 'CardController@creditCard')->name('creditCard');
		Route::post('/product/summary/payment', 'CardController@creditCard')->name('creditCardPost');
		Route::get('payment/dues', 'CardController@dues')->name('dues');
		Route::post('payment/dues', 'CardController@duesPost')->name('dues.post');
		Route::get('payment/cvv', 'CardController@secretCode')->name('cvvCode');
		Route::post('payment/cvv', 'CardController@makeOrderCC')->name('makeOrderCC');
	});

	Route::group([], function (){
		Route::get('message/{id}', 'MessageController@messageIndex')->name('privMessage');
		Route::post('message/{id}', 'MessageController@sendMessage')->name('sendMessage');
		Route::get('notification', 'NotificationController@notificationIndex')->name('myNotifications');
		Route::get('trades', 'TradesController@tradesIndex')->name('trades');
		Route::post('comment', 'CommentController@createComment')->name('comment');
		Route::get('/logout', 'LoginController@logout')->name('logout');
	});
});

		

	
