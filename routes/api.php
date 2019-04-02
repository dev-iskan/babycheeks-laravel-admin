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
    Route::get('/categories/create', 'CategoryController@create')->name('admin.categories.create');
    Route::resource('/categories', 'CategoryController', ['as'=>'admin'])->only(['index', 'show', 'update', 'destroy']);
    Route::post('/categories/{category}', 'CategoryController@store')->name('admin.categories.store');

    Route::resource('/ages', 'AgeController', ['as'=>'admin'])->only(['index', 'show', 'store', 'update', 'destroy']);

    Route::resource('/brands', 'BrandController', ['as'=>'admin'])->only(['index', 'show', 'store', 'update', 'destroy']);

    Route::get('/products/create', 'ProductController@create')->name('admin.products.create');
    Route::resource('/products', 'ProductController', ['as'=>'admin'])->only(['index', 'show', 'update', 'destroy']);
    Route::post('/products/{product}', 'ProductController@store')->name('admin.products.store');

    Route::post('/media/store', 'MediaController@store');
    Route::get('/media', 'MediaController@index');
    Route::delete('/media/destroy/{media}', 'MediaController@destroy');
});

Route::group(['namespace' => 'Api'],function () {
    Route::get('/telegram', 'TelegramController@index');
    Route::post('/order/{product}', 'TelegramController@sendOrder');
    Route::post('/feedback', 'TelegramController@sendFeedback');
    Route::post('/telegram/{product}', 'TelegramController@sendProduct');
});


Route::get('/search', 'Api\ElasticSearchController@search');
