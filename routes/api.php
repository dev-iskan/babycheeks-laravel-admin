<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Auth', 'prefix' => 'auth'],function () {
    Route::post('/register', 'RegisterController');
    Route::post('/login', 'LoginController');
    Route::get('/me', 'MeController');
});


Route::group(['namespace'=>'Admin', 'prefix' => 'admin'], function () {
    Route::resource('/categories', 'CategoryController', ['as'=>'admin']);
    Route::resource('/ages', 'AgeController', ['as'=>'admin']);
    Route::resource('/brands', 'BrandController', ['as'=>'admin']);
    Route::resource('/products', 'ProductController', ['as'=>'admin']);
});
