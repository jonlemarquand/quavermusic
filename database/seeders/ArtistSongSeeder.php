<?php

namespace Database\Seeders;

use App\Models\ArtistSong;
use App\Models\Song;
use Illuminate\Database\Seeder;

class ArtistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = Song::all();

        foreach ($songs as $song) {
            ArtistSong::create([
                'song_id' => $song->id,
                'artist_id' => rand(1, 10),
            ]);
        }
    }
}
