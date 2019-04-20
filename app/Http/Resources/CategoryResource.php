<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'description' => $this->description,
            'primary' => $this->primary,
            'parent' => $this->parent()->exists() ? $this->parent->id : null,
            'image' => $this->whenLoaded('media', function () {
                return $this->getFirstMedia($this->getTable()) ? $this->getFirstMedia($this->getTable())->getFullUrl() : null;
            }),
            'created_at' => $this->created_at->toDateTimeString()
        ];
    }
}
