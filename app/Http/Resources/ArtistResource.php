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
            'plays' => $this->plays(),
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'albums' => $this->albums()->where('artist_id', $this->id)->get()->map(function ($album) {
                return [
                    'id' => $album->id,
                    'name' => $album->name,
                    'album_cover' => $album->album_cover,
                    'slug' => $album->slug,
                ];
            }),
            'songs' => $this->songs()->where('artist_id', $this->id)->get()->map(function ($song) {
                return [
                    'id' => $song->id,
                    'name' => $song->name,
                    'album' => $song->album->name,
                ];
            })
        ];
    }
}
