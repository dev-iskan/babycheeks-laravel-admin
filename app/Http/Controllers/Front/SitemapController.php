<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class SitemapController extends Controller
{
    public function __invoke()
    {
      $products = Product::finished()->get();
      $categories = Category::finished()->get();
      return response()->view('layouts.sitemap', compact('products', 'categories'))->header('Content-type', 'text/xml');
    }
}
