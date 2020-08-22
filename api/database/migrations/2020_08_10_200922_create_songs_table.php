<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('song_name');
            $table->integer('track_number');
            $table->integer('primary_artist_id');
            $table->integer('album_id');
            $table->integer('subgenre_id');
            $table->integer('secondary_artist_id')->nullable();
            $table->integer('tertiary_artist_id')->nullable();
            $table->integer('quaternary_artist_id')->nullable();

            $table->foreign('primary_artist_id')->references('id')->on('artists');
            $table->foreign('secondary_artist_id')->references('id')->on('artists');
            $table->foreign('tertiary_artist_id')->references('id')->on('artists');
            $table->foreign('quaternary_artist_id')->references('id')->on('artists');
            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreign('subgenre_id')->references('id')->on('subgenres');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
