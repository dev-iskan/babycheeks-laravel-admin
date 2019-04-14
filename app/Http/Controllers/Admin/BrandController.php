<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brands\StoreBrandRequest;
use App\Http\Requests\Brands\UpdateBrandRequest;
use App\Models\Brand;
use App\Http\Resources\BrandResource;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(Request $request)
    {
        if ($request->pluck) {
            return Brand::all()->pluck('name', 'id');
        } else {
            return BrandResource::collection(Brand::latest()->paginate(10))->additional([
                'datatable' => [
                    'displayableColumns'=>Brand::getModel()->getDisplayableColumns(),
                    'table' => Brand::getModel()->getTable(),
                    'routeKey' => Brand::getModel()->getRouteKeyName()
                ]
            ]);
        }
    }

    public function store(StoreBrandRequest $request)
    {
        $brand = Brand::create($request->only('name'));
        return response()->json(['status' => __('custom.created'), 'brand' => $brand], 201);
    }

    public function show(Brand $brand)
    {
        return new BrandResource($brand);
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->only('name'));
        return response()->json(['status' => __('custom.updated'), 'brand' => $brand], 200);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return response()->json(['status' => __('custom.deleted')], 204);
    }
}
