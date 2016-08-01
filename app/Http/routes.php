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