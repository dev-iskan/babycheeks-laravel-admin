<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Request $request,Category $category)
    {
      if($category->isParent()) {
        return $this->parent($category);
      }

      return $this->child($request, $category);

    }


    public function parent(Category $category)
    {

      $category->load(['children']);
      $ids = $category->children()->pluck('id')->toArray();
      $products = Product::whereHas('categories', function ($query) use ($ids) {
        $query->whereIn('categories.id', $ids);
      })->inRandomOrder()->limit(8)->get();
      return view('pages.category_parent', compact('category', 'products'));
    }

    public function child(Request $request, Category $category)
    {
      $products = $category->products()->with(['brand', 'ages'])->filter($request)->paginate(1);
      return view('pages.category_child', compact('products'));
    }
}
