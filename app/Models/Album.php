<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'album_cover',
        'subgenre_id',
    ];

    public $timestamps = false;

    /**
     * @return BelongsToMany
     */
    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class, 'album_artists');
    }

    /*
     * @return HasMany
     */
    public function songs(): HasMany
    {
        return $this->hasMany(Song::class);
    }

    public function subgenre(): BelongsTo
    {
        return $this->belongsTo(Subgenre::class);
    }

    /**
     * @return int
     */
    public function getPlaysAttribute(): int
    {
        $songs = $this->songs()->where('album_id', $this->id)->get();
        $plays = [];
        forEach($songs as $song) {
            array_push($plays, ...($song->plays()->get([])));
        }
        return count($plays);
    }

    public function createSlug($name): string
    {
        //TODO change regex to remove non characters from start

        return $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    }
}
