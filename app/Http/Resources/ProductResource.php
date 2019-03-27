<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'gender' => $this->gender,
            'description' => $this->description,
            'ages' => AgeResource::collection($this->whenLoaded('ages')),
            'brand' => $this->brand()->exists() ? $this->brand->name : 'No brand',
            'categories' => CategoryResource::collection($this->whenLoaded('categories')),
            'images' => $this->whenLoaded('media', function () {
                return $this->getMedia($this->getTable())->map(function ($image) {
                    return $image->getFullUrl();
                });
            }),
            'created_at' => $this->created_at->toDateTimeString()
        ];
    }
}
