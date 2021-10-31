<?php

namespace App\Repositories;

use App\Http\Requests\ArtistRequest;
use App\Interfaces\ArtistInterface;
use App\Traits\ResponseAPI;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;

class ArtistRepository implements ArtistInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function createArtist(ArtistRequest $request)
    {
        DB::beginTransaction();
        try {
            $artist = new Artist;

            $artistName = $request->name;

            $artist->name = $artistName;
            $artist->slug =  $artist->createSlug($artistName);
            $artist->artist_image = !empty($request->image) ? $request->image : null;
            $artist->save();
            DB::commit();
            return $this->success("Artist successfully created", $artist,201);
        } catch(\Exception $error) {
            DB::rollback();
            return $this->error($error->getMessage(), 500);
        }
    }

}
