<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
      return view('pages.category_parent');
    }
    public function parent()
    {
      return view('pages.category_parent');
    }

    public function child()
    {
      return view('pages.category_child');
    }
}
