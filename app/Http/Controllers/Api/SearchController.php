<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        return ProductResource::collection(Product::search($request->q)->finished()->get());
    }
}
