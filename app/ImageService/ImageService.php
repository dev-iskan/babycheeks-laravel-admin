<?php

namespace App\ImageService;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ImageService {
    protected $model;

    public function __construct(Model $model)
    {
        $this->model=$model;
    }

    public function addModelImages(Request $request) {
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->addMedia();
        }

        if($request->has('images')) {
            $this->addMultipleMedia();
        }

    }

    public function updateModelImages(Request $request) {
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->deleteModelImages();
            $this->addMedia();
        }

        if($request->has('images')) {
            $this->deleteModelImages();
            $this->addMultipleMedia();
        }
    }

    public function deleteModelImages () {
        $this->model->getMedia($this->model->getTable())->each(function ($item) {
            $item->delete();
        });
    }

    protected function addMedia(){
        $this->model->addMediaFromRequest('image')
            ->withResponsiveImages()
            ->toMediaCollection($this->model->getTable());
    }

    protected function addMultipleMedia(){
        $this->model->addMultipleMediaFromRequest(["images"])
            ->each(function ($fileAdder) {
                $fileAdder
                ->withResponsiveImages()
                ->toMediaCollection($this->model->getTable());
            });
    }
}
