<?php

namespace Database\Factories;

use App\Models\PropertyList;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PropertyListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PropertyList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contact_id' => \App\Models\Contact::factory(),
            'update_date' => date("d/m/Y",time()),
        ];
    }
}
// function () {
//     return factory('App\Models\User')->create()->id;
// },
