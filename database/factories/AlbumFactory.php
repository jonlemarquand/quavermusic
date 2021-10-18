<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->word();
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));

        return [
            'name' => $name,
            'album_cover' => $this->faker->imageUrl(400,400),
            'subgenre_id' => rand(1, 10),
            'slug' => $slug,
        ];
    }
}
