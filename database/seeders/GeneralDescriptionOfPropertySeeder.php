<?php

namespace Database\Seeders;

use App\Models\GeneralDescriptionOfProperty;
use Illuminate\Database\Seeder;

class GeneralDescriptionOfPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralDescriptionOfProperty::factory()->times(100)->create();
    }
}
