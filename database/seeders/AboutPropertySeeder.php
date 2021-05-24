<?php

namespace Database\Seeders;

use App\Models\AboutProperty;
use Illuminate\Database\Seeder;

class AboutPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutProperty::factory()->times(100)->create();
    }
}
