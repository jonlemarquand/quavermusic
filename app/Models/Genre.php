<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
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
    ];

    public $timestamps = false;

    /*
     * @return HasMany
     */
    public function subgenre(): HasMany
    {
        return $this->hasMany(Subgenre::class);
    }
}
