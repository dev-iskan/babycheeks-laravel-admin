<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::with(['media'])->finished()->primary()->get()->chunk(3);
        return view('pages.main', compact('categories'));
    }
}
