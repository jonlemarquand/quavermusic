<?php

namespace Database\Factories;

use App\Models\Subgenre;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubgenreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subgenre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->colorName() . ' ' . $this->faker->colorName();

        return [
            'name' => $name,
            'genre_id' => rand(1,10),
        ];
    }
}
