<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brands\StoreBrandRequest;
use App\Http\Requests\Brands\UpdateBrandRequest;
use App\Models\Brand;
use App\Http\Resources\BrandResource;

class BrandController extends Controller
{
    public function index()
    {
        return BrandResource::collection(Brand::all());
    }

    public function store(StoreBrandRequest $request)
    {
        Brand::create($request->only('name'));
        return response()->json(['status' => 'Successfully created!'],201);
    }

    public function show(Brand $brand)
    {
        return new BrandResource($brand);
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->only('name'));
        return response()->json(['status' => 'Successfully updated!'], 200);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return response()->json(['status' => 'Successfully deleted!'], 202);
    }
}
