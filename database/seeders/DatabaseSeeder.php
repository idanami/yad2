<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ContactSeeder::class);
        $this->call(PropertyListSeeder::class);
        // $this->call(PropertyCharacteristicsSeeder::class);
        // $this->call(AboutPropertySeeder::class);
        // $this->call(GeneralDescriptionOfPropertySeeder::class);
    }
}
