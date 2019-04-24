<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
      $categories = Category::with(['media'])->finished()->primary()->inRandomOrder()->limit(6)->get();
      return view('pages.main', compact('categories'));
    }
}
