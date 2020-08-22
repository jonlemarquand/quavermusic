<?php

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
        DB::table('genres')->insert([
            ['genre_name' => 'Rock'],
            ['genre_name' => 'Pop'],
            ['genre_name' => 'Country'],
            ['genre_name' => 'Dance'],
            ['genre_name' => 'Jazz']
        ]);
        DB::table('subgenres')->insert([
            ['subgenre_name' => 'Pop-Rock', 'genre_id' => '1'],
            ['subgenre_name' => 'Bebop', 'genre_id' => '5'],
            ['subgenre_name' => 'House', 'genre_id' => '4'],
            ['subgenre_name' => 'Techno', 'genre_id' => '4'],
            ['subgenre_name' => 'Bluegrass', 'genre_id' => '3']
        ]);
        DB::table('artists')->insert([
            ['artist_name' => 'Foo Fighters'],
            ['artist_name' => 'Taylor Swift'],
            ['artist_name' => 'Miles Davis'],
            ['artist_name' => 'Punch Brothers'],
            ['artist_name' => 'DeadMau5']
        ]);
        DB::table('albums')->insert([
            ['album_name' => 'Wasting Light'],
            ['album_name' => 'There is Nothing Left to Lose'],
            ['album_name' => 'All Ashore'],
            ['album_name' => '1989'],
            ['album_name' => 'For Lack of a Better Name']
        ]);
        DB::table('songs')->insert([
            ['song_name' => 'Walk', 'track_number' => 13, 'primary_artist_id' => 1, 'album_id' => 1, 'subgenre_id' => 1],
            ['song_name' => 'Bridge Burning', 'track_number' => 1, 'primary_artist_id' => 1, 'album_id' => 1, 'subgenre_id' => 1],
            ['song_name' => 'Learn to Fly', 'track_number' => 3, 'primary_artist_id' => 1, 'album_id' => 2, 'subgenre_id' => 1]
        ]);
    }
}
