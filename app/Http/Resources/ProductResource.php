<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'type_id' => $this->type_id,
            'sku' => $this->sku,
            'opera_sku' => $this->opera_sku,
            'name' => $this->name,
            'url_key' => $this->url_key,
            'description' => $this->description,
            'price' => $this->price,
            'categories' => new CategoriesCollection($this->categories),
            //.. and other required fields
        ];
    }
}
