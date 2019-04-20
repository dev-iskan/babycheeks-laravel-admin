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

Route::get('/', 'Front\IndexController');
Route::get('/about-us', 'Front\AboutUsController');
Route::get('/c/{category}', 'Front\CategoryController')->name('category');
Route::get('/p/product', 'Front\ProductController');
