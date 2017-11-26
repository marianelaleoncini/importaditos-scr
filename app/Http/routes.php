<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

//Stock
Route::get('stock', [
    'as' => 'stock',
    'uses' => 'StockController@index'
]);

//Size
Route::get('sizes', [
    'as' => 'sizes',
    'uses' => 'SizeController@index'
]);
Route::get('sizes/create', [
    'as' => 'sizes.create',
    'uses' => 'SizeController@create'
]);
Route::post('sizes', [
    'as' => 'sizes',
    'uses' => 'SizeController@store'
]);
Route::get('sizes/edit/{size_id}', [
    'as' => 'sizes.edit',
    'uses' => 'SizeController@edit'
]);
Route::put('sizes/update/{size_id}', [
    'as' => 'sizes.update',
    'uses' => 'SizeController@update'
]);
Route::delete('/sizes/{size_id}', [
    'as' => 'sizes.delete',
    'uses' => 'SizeController@destroy'
]);

//Brand
Route::get('brands', [
    'as' => 'brands',
    'uses' => 'BrandController@index'
]);
Route::get('brands/create', [
    'as' => 'brands.create',
    'uses' => 'BrandController@create'
]);
Route::post('brands', [
    'as' => 'brands',
    'uses' => 'BrandController@store'
]);
Route::get('brands/edit/{brand_id}', [
    'as' => 'brands.edit',
    'uses' => 'BrandController@edit'
]);
Route::put('brands/update/{brand_id}', [
    'as' => 'brands.update',
    'uses' => 'BrandController@update'
]);
Route::delete('/brands/{brand_id}', [
    'as' => 'brands.delete',
    'uses' => 'BrandController@destroy'
]);

//Product
Route::get('products', [
    'as' => 'products',
    'uses' => 'ProductController@index'
]);
Route::get('products/create', [
    'as' => 'products.create',
    'uses' => 'ProductController@create'
]);
Route::post('products', [
    'as' => 'products',
    'uses' => 'ProductController@store'
]);
Route::get('products/edit/{product_id}', [
    'as' => 'products.edit',
    'uses' => 'ProductController@edit'
]);
Route::put('products/update/{product_id}', [
    'as' => 'products.update',
    'uses' => 'ProductController@update'
]);
Route::get('products/getSizes/brand/{brand_id}', 'ProductController@getSizes');
Route::delete('/products/{product_id}', [
    'as' => 'products.delete',
    'uses' => 'ProductController@destroy'
]);

//Category
Route::get('categories', [
    'as' => 'categories',
    'uses' => 'CategoryController@index'
]);
Route::get('categories/create', [
    'as' => 'categories.create',
    'uses' => 'CategoryController@create'
]);
Route::post('categories', [
    'as' => 'categories',
    'uses' => 'CategoryController@store'
]);
Route::get('categories/edit/{category_id}', [
    'as' => 'categories.edit',
    'uses' => 'CategoryController@edit'
]);
Route::put('categories/update/{category_id}', [
    'as' => 'categories.update',
    'uses' => 'CategoryController@update'
]);
Route::delete('/categories/{category_id}', [
    'as' => 'categories.delete',
    'uses' => 'CategoryController@destroy'
]);


//Authentication
Route::get('login', [
    'as' => 'auth.login',
    'uses' => 'Auth\AuthController@showLoginForm'
]);
Route::post('login', [
    'as' => 'auth.login',
    'uses' => 'Auth\AuthController@login'
]);
Route::get('logout', [
    'as' => 'auth.logout',
    'uses' => 'Auth\AuthController@logout'
]);

// Registration
Route::get('register', [
    'as' => 'auth.register',
    'uses' => 'Auth\AuthController@showRegistrationForm'
]);
Route::post('register', [
    'as' => 'auth.register',
    'uses' => 'Auth\AuthController@register'
]);

// Password Reset
Route::get('password/reset/{token?}', [
    'as' => 'auth.password.reset',
    'uses' => 'Auth\PasswordController@showResetForm'
]);
Route::post('password/email', [
    'as' => 'auth.password.email',
    'uses' => 'Auth\PasswordController@sendResetLinkEmail'
]);
Route::post('password/reset', [
    'as' => 'auth.password.reset',
    'uses' => 'Auth\PasswordController@reset'
]);