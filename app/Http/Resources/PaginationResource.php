<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaginationResource extends JsonResource
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
            'path' => $this->path(),
            'count' => $this->count(),
            'per_page' => $this->perPage(),
            'has_more_pages' => $this->hasMorePages(),
            'next_cursor' => $this->nextCursor()?->encode(),
            'prev_cursor' => $this->previousCursor()?->encode(),
        ];
    }
}
