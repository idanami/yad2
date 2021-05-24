<?php

namespace Database\Factories;

use App\Models\PropertyCharacteristics;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PropertyCharacteristicsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PropertyCharacteristics::class;

    /**
     * Define the model's default state.
     *                                      factory('App\ContactCompany')->create()->id
     * @return array
     */
    public function definition()
    {
        return [
            'property_list_id' => \App\Models\PropertyList::factory(),
            // 'property_list_id' =>  $this->faker->numberBetween($min = 1, $max = 15),
            'air_conditioning' => $this->faker->boolean(),
            'bars' => $this->faker->boolean(),
            'elevators' => $this->faker->boolean(),
            'kosher_kitchen' => $this->faker->boolean(),
            'access_for_disabled' => $this->faker->boolean(),
            'renovated' => $this->faker->boolean(),
            'mamad' => $this->faker->boolean(),
            'Storage' => $this->faker->boolean(),
            'pandor_doors' => $this->faker->boolean(),
            'tadiran_air_conditioner' => $this->faker->boolean(),
            'Furniture' => $this->faker->boolean(),
            'created_at' => now(),
        ];
    }
}
