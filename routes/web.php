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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    $product = \App\Models\Product::find(1);
    $image = $product->getFirstMedia('products');
//    $rendered = view('render', compact('image'))->render();
//    dd($rendered);
    return view('test', compact('image'));
});
Route::post('/test', function (\Illuminate\Http\Request $request) {
    if($request->hasFile('image')) {
        $product=\App\Models\Product::find(1);
        $product->addMediaFromRequest('image')->withResponsiveImages()->toMediaCollection('products');
    }
    return redirect()->back();
})->name('post_image');
