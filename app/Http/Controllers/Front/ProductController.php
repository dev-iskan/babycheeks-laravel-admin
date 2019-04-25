<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke(Product $product)
    {
      $product->load(['media', 'ages', 'brand', 'categories']);
      $images = $product->getMedia($product->getTable())->map(function ($image) {
        return  $image->getFullUrl();
      });
      $ids = $product->categories->pluck('id')->toArray();
      $similar_products = Product::with(['brand', 'media'])->
        where('id', '!=',$product->id)->whereHas('categories', function ($query) use ($ids) {
          $query->whereIn('categories.id', $ids);
        })->
        finished()->inRandomOrder()->limit(4)->get();
      return view('pages.product', compact('product', 'similar_products', 'images'));
    }
}
