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
        return response()->json(Product::search($request->q)->get());
    }

    public function filter (Request $request)
    {
        $products = Product::with(['brand', 'ages'])->filter($request)->get();

        return ProductResource::collection($products);
    }
}
