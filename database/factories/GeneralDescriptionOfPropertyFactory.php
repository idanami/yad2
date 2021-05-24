<?php

namespace Database\Factories;

use App\Models\GeneralDescriptionOfProperty;
use Illuminate\Database\Eloquent\Factories\Factory;

class GeneralDescriptionOfPropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GeneralDescriptionOfProperty::class;

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
            'general_description' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'property_condition' => $this->faker->realText($maxNbChars = 20, $indexSize = 2),
            'total_floors_in_the_building' => $this->faker->numberBetween($min = 1, $max = 8),
            'parking' => $this->faker->numberBetween($min = 1, $max = 3),
            'entry_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 years'),
            'balconies' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
