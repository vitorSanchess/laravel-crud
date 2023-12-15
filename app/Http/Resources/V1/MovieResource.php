<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class MovieResource extends JsonResource
{

    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'genre' => $this->genre,
            'decription' => $this->description
        ];
    }
}
