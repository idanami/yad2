<?php

namespace Database\Seeders;

use App\Models\AboutProperty;
use App\Models\Contact;
use App\Models\GeneralDescriptionOfProperty;
use App\Models\PropertyCharacteristics;
use App\Models\PropertyList;
use Illuminate\Database\Seeder;

class PropertyListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyList::factory()->times(50000)->create()->each(function($add){
            $aboutProperty = AboutProperty::factory()->make();
            $generalDescriptionOfProperty = GeneralDescriptionOfProperty::factory()->make();
            $propertyCharacteristics = PropertyCharacteristics::factory()->make();
            $add->propertyCharacteristics()->save($propertyCharacteristics);
            $add->aboutPropertys()->save($aboutProperty);
            $add->generalDescriptionOfProperty()->save($generalDescriptionOfProperty);
        });

        // PropertyList::factory()->times(10)->create();
        // (function($test){
        //     $fir = PropertyList::factory()->make();
        //     $test->propertyList()->save($fir);
        // });
    }
}
