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
	Route::middleware('admin.auth')->group( function ()
	{
		Route::resource('products','Admin\ProductController');
		Route::get('/listProducts', 'Admin\ProductController@anyData')->name('getProducts');
		Route::get('/listProductDetails/{code}', 'Admin\ProductController@getDetail')->name('getProductDetails');
		Route::delete('/products/delDetail/{products}', 'Admin\ProductController@delProductDetail')->name('delProductDetail');
		Route::post('/products/addDetail', 'Admin\ProductController@addDetail')->name('addDetail');
		Route::post('/products/addImage', 'Admin\ProductController@imagesUploadPost')->name('imagesUploadPost');
		Route::get('/products/{products}/{i}', 'Admin\ProductController@quantityIncrement')->name('quantityIncrement');
		Route::get('/listColors/{code}', 'Admin\ProductController@getColors')->name('listColors');
		
		Route::resource('categories','Admin\CategoryController');
		Route::get('/listCategories', 'Admin\CategoryController@anyData')->name('getCategories');
		Route::resource('brands','Admin\BrandController');
		Route::get('/listBrands', 'Admin\BrandController@anyData')->name('getBrands');
		Route::resource('users','Admin\UserController');
		Route::get('/listUsers', 'Admin\UserController@anyData')->name('getUsers');
		Route::resource('colors','Admin\ColorController');
		Route::get('/listColors', 'Admin\ColorController@anyData')->name('getColors');
		Route::resource('admins','Admin\AdminController');
		Route::get('/listAdmins', 'Admin\AdminController@anyData')->name('getAdmins');
		Route::get('/addProduct', 'Admin\ProductController@addForm')->name('addProduct');
	});
    Route::get('login', 'AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminAuth\AdminLoginController@login')->name('admin.auth');
    Route::post('logout', 'AdminAuth\AdminLoginController@logout')->name('admin.logout');
    
    Route::get('register', 'AdminAuth\AdminRegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'AdminAuth\AdminRegisterController@register')->name('admin.signup');

    
    // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    // Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});

Route::prefix('shop')->group(function(){
	Route::middleware('auth')->group( function ()
	{
		
	});
	Route::get('/home', 'Shop\ShopController@index')->name('shop.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

