<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Request $request, Category $category)
    {
        if ($category->isParent()) {
            return $this->parent($category);
        }

        return $this->child($request, $category);
    }


    protected function parent(Category $category)
    {
        $category->load(['children']);
        $ids = $category->children()->pluck('id')->toArray();
        $products = Product::with(['brand', 'ages', 'media'])->whereHas('categories', function ($query) use ($ids) {
            $query->whereIn('categories.id', $ids);
        })->inRandomOrder()->finished()->limit(8)->get();
        return view('pages.category_parent', compact('category', 'products'));
    }

    protected function child(Request $request, Category $category)
    {
        $products = $category->products()->with(['brand', 'ages', 'media'])->filter($request)->finished()->paginate(20);
        return view('pages.category_child', compact('products'));
    }
}
