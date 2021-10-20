<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllSongsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        $album = $this->album;

        return [
            'plays' => count($this->plays),
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artists()->get()->map(function ($artist) {
                return [
                    'name' => $artist->name,
                    'slug' => $artist->slug,
                ];
            }),
            'album_cover' => $album->album_cover,
        ];
    }
}
