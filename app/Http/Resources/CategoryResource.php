<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'views_count' => $this->views_count,
            'children' => CategoryResource::collection($this->whenLoaded('children')),
        ];
    }
}
