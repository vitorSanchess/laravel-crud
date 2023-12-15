<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class GameResource extends JsonResource
{

    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'studio' => $this->studio,
            'releaseDate' => $this->releaseDate
        ];
    }
}
