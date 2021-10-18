<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllArtistsCollection;
use App\Http\Resources\AllArtistsResource;
use App\Http\Resources\OverallResource;
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
        return AllArtistsResource::collection(Artist::all())->sortByDesc('plays')->take(6);
    }
}
