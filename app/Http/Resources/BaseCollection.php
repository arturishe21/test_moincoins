<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\CursorPaginator;
use JsonSerializable;

class BaseCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     *
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request) : array|JsonSerializable|Arrayable
    {
        if ($this->resource instanceof CursorPaginator) {
            $pagination = new PaginationResource($this);
        }

        return [
            'collection' => $this->collection,
            'cursor' => $pagination ?? null,
        ];
    }
}
