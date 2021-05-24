<?php

namespace Database\Factories;

use App\Models\AboutProperty;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutPropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AboutProperty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'property_list_id' =>  $this->faker->numberBetween($min = 1, $max = 15),
            'property_list_id' => \App\Models\PropertyList::factory(),
            'city' => $this->faker->city,
            'settlement' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'street' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'house_number' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'property_type' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'rooms_number' => $this->faker->numberBetween($min = 1, $max = 8),
            'floor_number' => $this->faker->numberBetween($min = 1, $max = 25),
            'square_meter' => $this->faker->numberBetween($min = 50, $max = 150),
            'price' => $this->faker->numberBetween($min = 800000, $max = 5000000),
        ];
    }
}

