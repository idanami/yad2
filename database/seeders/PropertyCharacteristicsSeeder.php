<?php

namespace Database\Seeders;

use App\Models\PropertyCharacteristics;
use Database\Factories\PropertyListFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;


class PropertyCharacteristicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyCharacteristics::factory()->times(100)->create();
    }
}
