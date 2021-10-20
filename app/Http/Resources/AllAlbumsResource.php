<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AllAlbumsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'plays' => $this->plays,
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'artist' => $this->artists()->get()->map(function ($artist) {
                return [
                    'name' => $artist->name,
                    'slug' => $artist->slug,
                ];
            }),

        ];
    }
}
