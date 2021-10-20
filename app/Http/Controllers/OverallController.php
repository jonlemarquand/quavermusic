<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllAlbumsResource;
use App\Http\Resources\AllArtistsCollection;
use App\Http\Resources\AllArtistsResource;
use App\Http\Resources\OverallResource;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OverallController extends Controller
{
    /*
     *
     */
    public function show($period)
    {
        $artists = AllArtistsResource::collection(Artist::all())->sortByDesc('plays')->take(6);
        $albums = AllAlbumsResource::collection(Album::all())->sortByDesc('plays')->take(6);

        return [
            'artists' => $artists,
            'albums' => $albums,
        ];
    }
}
