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
    $category = \App\Models\Category::find(1);
    $image = $category->getFirstMedia('categories');
//    $rendered = view('render', compact('image'))->render();
//    dd($rendered);
    return view('test', compact('image'));
});
Route::post('/test', function (\Illuminate\Http\Request $request) {
    if($request->hasFile('image')) {
        $category =\App\Models\Category::find(1);
        $category->addMedia($request->file('image'))->withResponsiveImages()->toMediaCollection('categories');
    }
    return redirect()->back();
})->name('post_image');
