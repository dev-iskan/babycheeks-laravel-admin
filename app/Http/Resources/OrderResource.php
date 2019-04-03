<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'phone' => $this->phone,
            'finished' => $this->finished,
            'product' => $this->whenLoaded('product', function () {
                return new ProductResource($this->product);
            }),
            'created_at' => $this->created_at->toDateTimeString()
        ];
    }
}
