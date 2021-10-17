<?php

namespace App\Http\Controllers;

use App\Http\Resources\OverallResource;
use Illuminate\Http\Request;

class OverallController extends Controller
{
    /*
     *
     */
    public function week($period): OverallResource
    {
        return new OverallResource($period);
    }
}
