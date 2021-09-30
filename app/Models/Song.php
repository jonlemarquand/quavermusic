<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
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
        'album_id',
    ];

    public $timestamps = false;

    /*
     * @return BelongsToMany
     */
    public function Artist(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }

    /*
     * @return BelongsTo
     */
    public function Album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }


}
