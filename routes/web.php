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

Route::get('/', 'Front\IndexController')->name('main');
Route::get('/about-us', 'Front\AboutUsController')->name('about-us');
Route::get('/c/{category}', 'Front\CategoryController')->name('category');
Route::get('/p/{product}', 'Front\ProductController')->name('product');
Route::get('/404', function () {
  return view('pages.404');
});
