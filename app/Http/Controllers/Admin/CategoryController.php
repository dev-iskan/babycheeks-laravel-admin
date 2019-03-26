<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::with(['children'])->get());
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->only(['name', 'description']));
        $category->setParent($request->parent_id);
        return response()->json(['status' => 'Successfully created!'],201);
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
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
