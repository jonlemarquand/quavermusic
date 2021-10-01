<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'albums' => $this->albums()->where('artist_id', $this->id)->get()->map(function ($album) {
                return [
                    'id' => $album->id,
                    'name' => $album->name,
                    'album_cover' => $album->album_cover,
                ];
            }),
        ];
    }
}
