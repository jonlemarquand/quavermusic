<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use phpDocumentor\Reflection\Types\Integer;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    /**
     * @return BelongsToMany
     */
    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class, 'album_artists');
    }

    /**
     * @return BelongsToMany
     */
    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class, 'artist_songs');
    }

    /**
     * @return int
     */
    public function getPlaysAttribute(): int
    {
        $songs = $this->songs()->where('artist_id', $this->id)->get();
        $plays = [];
        forEach($songs as $song) {
            array_push($plays, ...($song->plays()->get([])));
        }
        return count($plays);
    }

    public function createSlug($name): string
    {
        return $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
    }
}
