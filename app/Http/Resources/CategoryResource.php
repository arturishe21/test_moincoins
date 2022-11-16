<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function toArray($request) : array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'url_key' => $this->url_key,
            'description' => $this->description,
            'image' => $this->image,
            'parent_id' => $this->parent_id,
            'products' => new ProductsCollection($this->products)
        ];
    }
}
