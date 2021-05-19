<?php

namespace App\Http\Controllers;

use App\Models\AboutProperty;
use App\Models\Address;
use App\Models\Contact;
use App\Models\GeneralDescriptionOfProperty;
use App\Models\Image;
use App\Models\PropertyCharacteristics;
use App\Models\PropertyList;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function realestate(){
        //////////////////////// Contact ///////////////////////////////////////
        // $contacts = new Contact;
        // $contacts->name = 'idan';
        // $contacts->phone = '0245531156';
        // $contacts->email = 'idanaminov@gmail.com';
        // $contacts->save();

        $contacts =  Contact::find(1);

        // $contacts =  Contact::find(1)->propertyList->find(1)->general_description;

        //////////////////////// PropertyList ///////////////////////////////////////
        // $property_list = new PropertyList;
        // $property_list->update_date = date("d/m/Y",time());
        // $contacts->propertyList()->save($property_list);

        $property_lists =  PropertyList::all();
        // $property_lists =  PropertyList::find(2);

        //////////////////////// AboutProperty ///////////////////////////////////////
        // $about_property = new AboutProperty;
        // $about_property->city = 'אור יהודה';
        // $about_property->settlement = 'הסתדרות';
        // $about_property->street = 'אליהו סעדון';
        // $about_property->house_number = 102;
        // $about_property->property_type = 'דירת גן';
        // $about_property->rooms_number = 6;
        // $about_property->floor_number = 1;
        // $about_property->square_meter = 150;
        // $about_property->price = 2200000;
        // $property_lists->aboutPropertys()->save($about_property);

        // $price = $property_list->aboutPropertys[0]->price;


        //////////////////////// PropertyCharacteristics ///////////////////////////////////////
        // $propertyCharacteristics = new PropertyCharacteristics;
        // $propertyCharacteristics->air_conditioning = 1;
        // $propertyCharacteristics->bars = 1;
        // $propertyCharacteristics->access_for_disabled = 1;
        // $propertyCharacteristics->pandor_doors = 1;
        // $propertyCharacteristics->tadiran_air_conditioner = 1;
        // $propertyCharacteristics->Furniture = 1;
        // $property_lists->propertyCharacteristics()->save($propertyCharacteristics);

        // $pandor_doors = $property_lists->propertyCharacteristics->first()->pandor_doors;


        //////////////////////// image ///////////////////////////////////////
        // $image = new Image;
        // $image->image = 'https://img.yad2.co.il/Pic/202104/28/2_1/o/y2_1_02851_20210428220445.jpeg?l=7&c=3&w=195&h=117';
        // $property_lists->image()->save($image);

        //////////////////////// image ///////////////////////////////////////
        // $general_description_of_properties = new GeneralDescriptionOfProperty;
        // $general_description_of_properties->general_description = 'דירה ענקית מושקעת במקום מטופח';
        // $general_description_of_properties->property_condition = 'משופץ';
        // $general_description_of_properties->total_floors_in_the_building = 5;
        // $general_description_of_properties->parking = 2;
        // $general_description_of_properties->entry_date = '08/08/21';
        // $general_description_of_properties->balconies = 2;
        // $property_lists->generalDescriptionOfProperty()->save($general_description_of_properties);


        // return 'asfaga';
        // return $about_property;
        return view('home.realestate')->with('property_lists',$property_lists);
    }

    public function mobileContent(Request $request)
    {
        $property_list =  PropertyList::find($request->propertyListId);
        return view('home.mobile_content')->with('property_list',$property_list);;
    }

}

