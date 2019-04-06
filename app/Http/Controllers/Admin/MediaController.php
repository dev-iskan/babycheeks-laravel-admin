<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\MediaResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\MediaLibrary\Models\Media;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(Request $request) {
        $model = $request->model === 'category' ?
            Category::where('slug', $request->slug)->first() :
            Product::where('slug', $request->slug)->first();

        if(!$model) return response()->json(['status' => 'Not Found'], 404);

        return MediaResource::collection($model->getMedia($model->getTable()));
    }

    public function store (Request $request) {
        if(!$request->hasFile('image')) return response()->json(['status'=>'No image'], 404);
        $model = $request->model === 'category' ?
            Category::where('slug', $request->slug)->first() :
            Product::where('slug', $request->slug)->first();

        if(!$model) return response()->json(['status' => 'Not Found'], 404);

        $id = $this->addMedia($model);
        return response()->json(['id' => $id],201);
    }

    public function destroy(Media $media) {
        $id = $media->id;
        $media->delete();
        return response()->json(['id' => $id],204);
    }

    protected function addMedia($model){
        return $model->addMediaFromRequest('image')
            ->usingName(str_random(16))
            ->withResponsiveImages()
            ->toMediaCollection($model->getTable())->id;
    }
}
