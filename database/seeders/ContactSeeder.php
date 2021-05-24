<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\PropertyList;
use Database\Factories\PropertyListFactory;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory()->times(10)->create()->each
        (function($test){
            $fir = PropertyList::factory()->make();
            $test->propertyList()->save($fir);
        });
    }
}
