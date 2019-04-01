<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(Request $request)
    {
        if ($request->parent) {
            return Category::type('parent')->where('slug', '!=' , $request->category_slug)->finished()->pluck('name', 'id');
        }
        else if($request->pluck) {
            return Category::type('children')->finished()->pluck('name', 'id');
        }
        else {
             return CategoryResource::collection(Category::with(['parent'])->finished()->paginate(10))->additional([
                 'datatable' => [
                     'displayableColumns'=>Category::getModel()->getDisplayableColumns(),
                     'table' => Category::getModel()->getTable(),
                     'routeKey' => Category::getModel()->getRouteKeyName()
                 ]
             ]);
        }

    }

    public function create(Category $category) {
        if (!$category->exists) {
            $category = Category::createAndReturnSkeletonCategory();
            return new CategoryResource($category);
        }
    }

    public function store(StoreCategoryRequest $request, Category $category)
    {
        $category->storeFinishedCategory($request->only(['name', 'description']));
        $category->setParent($request->parent_id);
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
        return response()->json(['status' => 'Successfully updated!'], 200);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['status' => 'Successfully deleted!'], 202);
    }
}
