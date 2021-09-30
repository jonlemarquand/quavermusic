<?php

namespace Database\Seeders;

use App\Models\Song;
use App\Models\SongUser;
use Illuminate\Database\Seeder;

class SongUserSeeder extends Seeder
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
            SongUser::create([
                'song_id' => $song->id,
                'user_id' => 1,
            ]);
        }
    }
}
