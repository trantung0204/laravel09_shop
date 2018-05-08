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

Route::prefix('admin')->group(function(){
	Route::middleware('auth')->group( function ()
	{
		Route::resource('products','Admin\ProductController');
		Route::get('/listProducts', 'Admin\ProductController@anyData')->name('getProducts');
		Route::resource('categories','Admin\CategoryController');
		Route::get('/listCategories', 'Admin\CategoryController@anyData')->name('getCategories');
		Route::resource('brands','Admin\BrandController');
		Route::get('/listBrands', 'Admin\BrandController@anyData')->name('getBrands');
		Route::resource('users','Admin\UserController');
		Route::get('/listUsers', 'Admin\UserController@anyData')->name('getUsers');
		Route::resource('colors','Admin\ColorController');
		Route::get('/listColors', 'Admin\ColorController@anyData')->name('getColors');
		Route::resource('guests','Admin\GuestController');
		Route::get('/listGuests', 'Admin\GuestController@anyData')->name('getGuests');

		Route::get('/addProduct', 'Admin\ProductController@addForm')->name('getGuests');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
