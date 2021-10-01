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
        'id',
        'name',
        'album_cover',
        'subgenre_id',
    ];

    public $timestamps = false;

    /**
     * @return BelongsToMany
     */
    public function artist(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }

    /*
     * @return HasMany
     */
    public function song(): HasMany
    {
        return $this->hasMany(Song::class);
    }

    public function subgenre(): BelongsTo
    {
        return $this->belongsTo(Subgenre::class);
    }
}
