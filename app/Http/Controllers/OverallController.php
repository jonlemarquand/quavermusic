<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllAlbumsResource;
use App\Http\Resources\AllArtistsCollection;
use App\Http\Resources\AllArtistsResource;
use App\Http\Resources\AllSongsResource;
use App\Http\Resources\OverallResource;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
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
        $songs = AllSongsResource::collection(Song::all())->sortByDesc('plays')->take(10);

        return [
            'artists' => $artists,
            'albums' => $albums,
            'songs' => $songs,
        ];
    }
}
