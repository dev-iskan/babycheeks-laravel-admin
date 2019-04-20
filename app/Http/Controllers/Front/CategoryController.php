<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
      if($category->isParent()) {
        return $this->parent($category);
      }

      return $this->child($category);

    }


    public function parent(Category $category)
    {

      $category->load(['children']);
      $ids = $category->children()->pluck('id')->toArray();
      $products = Product::whereHas('categories', function ($query) use ($ids) {
        $query->whereIn('categories.id', $ids);
      })->inRandomOrder()->limit(6)->get();
      return view('pages.category_parent', compact('category', 'products'));
    }

    public function child(Category $category)
    {
      return view('pages.category_child');
    }
}
