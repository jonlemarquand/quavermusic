<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\OverallController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('artist')->group(function () {
    Route::get('/{id}', [ArtistController::class, 'show']);
});

Route::prefix('album')->group(function () {
    Route::get('/{id}', [AlbumController::class, 'show']);
});

Route::prefix('overall')->group(function () {
   Route::get('/{period}', [OverallController::class, 'show']);
});
