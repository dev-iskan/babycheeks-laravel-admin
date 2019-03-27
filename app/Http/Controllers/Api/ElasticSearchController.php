<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElasticSearchController extends Controller
{
    public function search(Request $request) {
        $products = Product::search($request->q)->get(); //paginate(10)
        return ProductResource::collection($products);
    }
}
