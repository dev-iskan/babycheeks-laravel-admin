<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Products\StoreProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\ImageService\ImageService;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::with(['brand'])->get())->additional([
            'meta' => [
                'displayableColumns'=>Product::getModel()->getDisplayableColumns(),
                'table' => Product::getModel()->getTable(),
                'routeKey' => Product::getModel()->getRouteKeyName()
            ]
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $product = Product::create($request->only(['name', 'description', 'gender']));
        $this->syncRelationships($request, $product);

        $image_service = new ImageService($product);
        $image_service->addModelImages($request);
        return response()->json(['status' => 'Successfully created!'],201);
    }

    public function show(Product $product)
    {
        return new ProductResource($product->load(['brand', 'ages', 'categories', 'media']));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->only(['name', 'description', 'gender']));
        $this->syncRelationships($request, $product);

        $image_service = new ImageService($product);
        $image_service->updateModelImages($request);
        return response()->json(['status' => 'Successfully updated!'], 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        $image_service = new ImageService($product);
        $image_service->deleteModelImages();
        return response()->json(['status' => 'Successfully deleted!'], 202);
    }

    protected function syncRelationships(Request $request, Product $product) {
        $product->setBrand($request->brand_id);
        $product->syncAges($request->ages);
        $product->syncCategories($request->categories);
    }
}
