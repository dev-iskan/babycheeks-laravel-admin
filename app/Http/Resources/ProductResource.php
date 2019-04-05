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
            'price' => $this->formatted_price,
            'ages' => $this->whenLoaded('ages', function () {
                return $this->ages->pluck('age', 'id');
            }),
            'brand' => $this->brand()->exists() ? $this->brand->id : null,
            'categories' => $this->whenLoaded('categories', function () {
                return $this->categories->pluck('name', 'id');
            }),
            'images' => $this->whenLoaded('media', function () {
                return $this->getMedia($this->getTable())->map(function ($image) {
                    return $image->getFullUrl();
                });
            }),
            'created_at' => $this->created_at->toDateTimeString()
        ];
    }
}
