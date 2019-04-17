<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function parent()
    {
        return view('pages.category_parent');
    }

    public function child()
    {
        return view('pages.category_child');
    }
}
