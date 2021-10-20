<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AllSongsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
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
