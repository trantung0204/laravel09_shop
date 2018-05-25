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
		Route::get('/listImages/{id}', 'Admin\ProductController@getImages')->name('listImages');
		Route::get('/delImages/{id}', 'Admin\ProductController@delImages')->name('delImages');
		Route::get('/addProduct', 'Admin\ProductController@addForm')->name('addProduct');
		
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
		Route::post('admins/updateAvatar/{i}', 'Admin\AdminController@updateAvatar')->name('admins.updateAvatar');

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
	Route::get('/category/{slug}', 'Shop\ShopController@categoryList')->name('shop.categoryList');
	Route::get('/brand/{slug}', 'Shop\ShopController@brandList')->name('shop.brandList');
	Route::get('/product/{slug}', 'Shop\ShopController@showProduct')->name('shop.showProduct');
	Route::get('/checkout', 'Shop\ShopController@checkOut')->name('shop.checkOut');
	//Route::get('/product', 'Shop\ShopController@product')->name('shop.product');
	Route::get('/qickView/{code}', 'Shop\ShopController@productModal')->name('shop.productModal');
	Route::get('/getImageByColor/{id}/{color_id}', 'Shop\ShopController@getImageByColor')->name('shop.getImageByColor');
	Route::get('/getSizeByColor/{code}/{color_id}', 'Shop\ShopController@getSizeByColor')->name('shop.getSizeByColor');
	Route::get('/testCart', 'Shop\CartController@testCart')->name('shop.testCart');
	Route::get('/getCart', 'Shop\CartController@getCart')->name('shop.getCart');
	Route::post('/addProduct', 'Shop\CartController@addProduct')->name('shop.addProduct');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

