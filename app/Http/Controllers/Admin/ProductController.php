<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Products\StoreProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index()
    {
        return ProductResource::collection(Product::with(['brand'])->finished()->latest()->paginate(10))->additional([
            'datatable' => [
                'displayableColumns'=>Product::getModel()->getDisplayableColumns(),
                'table' => Product::getModel()->getTable(),
                'routeKey' => Product::getModel()->getRouteKeyName()
            ]
        ]);
    }

    public function create(Product $product)
    {
        if (!$product->exists) {
            $product = Product::createAndReturnSkeletonProduct();
            return new ProductResource($product);
        }
    }

    public function store(StoreProductRequest $request, Product $product)
    {
        $product->storeFinishedProduct($request->only(['name', 'description', 'gender', 'price']));
        $this->syncRelationships($request, $product);
        return response()->json(['status' => 'Successfully created!'], 201);
    }

    public function show(Product $product)
    {
        return new ProductResource($product->load(['brand', 'ages', 'categories', 'media']));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->only(['name', 'description', 'gender', 'price']));
        $this->syncRelationships($request, $product);
        return response()->json(['status' => 'Successfully updated!'], 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['status' => 'Successfully deleted!'], 202);
    }

    protected function syncRelationships(Request $request, Product $product)
    {
        $product->setBrand($request->brand_id);
        $product->syncAges($request->ages);
        $product->syncCategories($request->categories);
    }
}
