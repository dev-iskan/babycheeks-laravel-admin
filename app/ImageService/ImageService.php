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

    public function addModelImage(Request $request) {
        if(!$request->hasFile('image')) {
            return;
        }
        $this->addMedia();
    }

    public function updateModelImage(Request $request) {
        if(!$request->hasFile('image')) {
            return;
        }
        $this->deleteModelImages();
        $this->addMedia();
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
}
