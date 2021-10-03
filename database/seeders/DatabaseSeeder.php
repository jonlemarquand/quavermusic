<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Song;
use App\Models\Subgenre;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([AdminUserSeeder::class]);
        User::factory(10)->create();
        Artist::factory(10)->create();
        Genre::factory(10)->create();
        Subgenre::factory(10)->create();
        Album::factory(10)->create();
        Song::factory(50)->create();
        $this->call([
            AlbumArtistSeeder::class,
            ArtistSongSeeder::class,
            SongUserSeeder::class,
        ]);
    }
}
