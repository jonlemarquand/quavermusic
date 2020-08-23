<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['genre_name' => 'Blues'],
            ['genre_name' => 'Christian'],
            ['genre_name' => 'Classical'],
            ['genre_name' => 'Country'],
            ['genre_name' => 'Electronic'],
            ['genre_name' => 'Folk'],
            ['genre_name' => 'Funk'],
            ['genre_name' => 'RnB'],
            ['genre_name' => 'Jazz'],
            ['genre_name' => 'Soundtracks'],
            ['genre_name' => 'Pop'],
            ['genre_name' => 'Rock']
        ]);
        DB::table('subgenres')->insert([
            ['subgenre_name' => 'Blues', 'genre_id' => '1'],
            ['subgenre_name' => 'CCM', 'genre_id' => '2'],
            ['subgenre_name' => 'Worship', 'genre_id' => '2'],
            ['subgenre_name' => 'Classical', 'genre_id' => '3'],
            ['subgenre_name' => 'Bluegrass', 'genre_id' => '4'],
            ['subgenre_name' => 'Country', 'genre_id' => '4'],
            ['subgenre_name' => 'Ambient', 'genre_id' => '5'],
            ['subgenre_name' => 'Drum n Bass', 'genre_id' => '5'],
            ['subgenre_name' => 'Dubstep', 'genre_id' => '5'],
            ['subgenre_name' => 'Garage', 'genre_id' => '5'],
            ['subgenre_name' => 'House', 'genre_id' => '5'],
            ['subgenre_name' => 'Synthpop', 'genre_id' => '5'],
            ['subgenre_name' => 'Trance', 'genre_id' => '5'],
            ['subgenre_name' => 'Celtic', 'genre_id' => '6'],
            ['subgenre_name' => 'Folk', 'genre_id' => '6'],
            ['subgenre_name' => 'Folk Rock', 'genre_id' => '6'],
            ['subgenre_name' => 'Singer-Songwriter', 'genre_id' => '6'],
            ['subgenre_name' => 'Funk', 'genre_id' => '7'],
            ['subgenre_name' => 'Rap', 'genre_id' => '8'],
            ['subgenre_name' => 'Garage', 'genre_id' => '8'],
            ['subgenre_name' => 'Grime', 'genre_id' => '8'],
            ['subgenre_name' => 'Fusion', 'genre_id' => '9'],
            ['subgenre_name' => 'Bebop', 'genre_id' => '9'],
            ['subgenre_name' => 'Musicals', 'genre_id' => '10'],
            ['subgenre_name' => 'Film Scores', 'genre_id' => '10'],
            ['subgenre_name' => 'Video Game Scores', 'genre_id' => '10'],
            ['subgenre_name' => 'Pop', 'genre_id' => '11'],
            ['subgenre_name' => 'Kpop', 'genre_id' => '11'],
            ['subgenre_name' => 'Alt Rock', 'genre_id' => '12'],
            ['subgenre_name' => 'Hard Rock', 'genre_id' => '12'],
            ['subgenre_name' => 'Heavy Metal', 'genre_id' => '12'],
            ['subgenre_name' => 'Indie Rock', 'genre_id' => '12'],
            ['subgenre_name' => 'Pop Punk', 'genre_id' => '12'],
            ['subgenre_name' => 'Prog Rock', 'genre_id' => '12'],
            ['subgenre_name' => 'Punk', 'genre_id' => '12'],
            ['subgenre_name' => 'Ska', 'genre_id' => '12'],
            ['subgenre_name' => 'Soft Rock', 'genre_id' => '12'],
            ['subgenre_name' => 'Rock', 'genre_id' => '12'],
            ['subgenre_name' => 'Grunge', 'genre_id' => '12']
        ]);
    }
}
