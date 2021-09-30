<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\AlbumArtist;
use Illuminate\Database\Seeder;

class AlbumArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = Album::all();

        foreach ($albums as $album) {
            AlbumArtist::create([
                'album_id' => $album->id,
                'artist_id' => rand(1, 10),
            ]);
        }
    }
}
