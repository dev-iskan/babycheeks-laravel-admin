<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\ImageService\ImageService;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->parent) {
            return Category::type('parent')->pluck('name', 'id');
        }
        else if($request->pluck) {
            return Category::type('children')->pluck('name', 'id');
        }
        else {
             return CategoryResource::collection(Category::with(['parent'])->paginate(10))->additional([
                 'datatable' => [
                     'displayableColumns'=>Category::getModel()->getDisplayableColumns(),
                     'table' => Category::getModel()->getTable(),
                     'routeKey' => Category::getModel()->getRouteKeyName()
                 ]
             ]);
        }

    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->only(['name', 'description']));
        $category->setParent($request->parent_id);

        $image_service = new ImageService($category);
        $image_service->addModelImages($request);
        return response()->json(['status' => 'Successfully created!'],201);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category->load(['media', 'parent']));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->only(['name', 'description']));
        $category->setParent($request->parent_id);

        $image_service = new ImageService($category);
        $image_service->updateModelImages($request);
        return response()->json(['status' => 'Successfully updated!'], 200);
    }

    public function destroy(Category $category)
    {
        $image_service = new ImageService($category);
        $image_service->deleteModelImages();
        $category->delete();
        return response()->json(['status' => 'Successfully deleted!'], 202);
    }
}
