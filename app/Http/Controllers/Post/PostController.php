<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\AboutProperty;
use App\Models\Contact;
use App\Models\GeneralDescriptionOfProperty;
use App\Models\Image;
use App\Models\PropertyCharacteristics;
use App\Models\PropertyList;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function newPost(Request $request)
    {
    //////////// contact table
        $contacts = new Contact;
        $contacts->name = $request->name;
        $contacts->phone = $request->phone;
        $contacts->phone_prefix = $request->get('prefix_phone');
        $contacts->email = $request->email;
        $contacts->save();
        $contacts = Contact::find($contacts->id);

    ////////// propertyList table
        $propertyList = new PropertyList;
        $propertyList->update_date = date('Y-m-d');
        $contacts->propertyList()->save($propertyList);
        $propertyList = PropertyList::find($propertyList->id);

    ////////// aboutProperty table
        $aboutProperty = new AboutProperty;
        $aboutProperty->city = $request->city;
        $aboutProperty->street = $request->street;
        $aboutProperty->house_number = $request->house_number;
        $aboutProperty->property_type = $request->property_type;
        $aboutProperty->rooms_number = $request->rooms_number;
        $aboutProperty->floor_number = $request->floor_number;
        $aboutProperty->square_meter = $request->square_meter;
        $aboutProperty->price = $request->price;
        $propertyList->aboutPropertys()->save($aboutProperty);

    //// generalDescriptionOfProperty table
        $generalDescriptionOfProperty = new GeneralDescriptionOfProperty;
        $generalDescriptionOfProperty->general_description = $request->general_description;
        $generalDescriptionOfProperty->property_condition = $request->property_condition;
        $generalDescriptionOfProperty->total_floors_in_the_building = $request->total_floors_in_the_building;
        $generalDescriptionOfProperty->parking = $request->parking;
        $generalDescriptionOfProperty->entry_date = $request->entry_date;
        $generalDescriptionOfProperty->balconies = $request->balconies;
        $propertyList->generalDescriptionOfProperty()->save($generalDescriptionOfProperty);

    //// propertyCharacteristics table
        $propertyCharacteristics = new PropertyCharacteristics;
        $propertyCharacteristics->air_conditioning = $request->input('air_conditioning') ? true : false;
        $propertyCharacteristics->bars = $request->input('bars') ? true : false;
        $propertyCharacteristics->elevators = $request->input('elevators') ? true : false;
        $propertyCharacteristics->kosher_kitchen = $request->input('kosher_kitchen') ? true : false;
        $propertyCharacteristics->access_for_disabled = $request->input('access_for_disabled') ? true : false;
        $propertyCharacteristics->renovated = $request->input('renovated') ? true : false;
        $propertyCharacteristics->mamad = $request->input('mamad') ? true : false;
        $propertyCharacteristics->Storage = $request->input('Storage') ? true : false;
        $propertyCharacteristics->pandor_doors = $request->input('pandor_doors') ? true : false;
        $propertyCharacteristics->tadiran_air_conditioner = $request->input('tadiran_air_conditioner') ? true : false;
        $propertyCharacteristics->Furniture = $request->input('Furniture') ? true : false;
        $propertyList->propertyCharacteristics()->save($propertyCharacteristics);

    //////////// images table
        $images = new Image;
        if($request->hasFile('image')){
            $imageFiles = $request->file('image');
            $name = time().'-'.$imageFiles->getClientOriginalName();
            $name = str_replace(' ','-',$name);
            $imageFiles->move('images',$name);
            $propertyList->image()->create(['image'=>$name]);
        }
        if($request->hasFile('video')){
            $videoFiles = $request->file('video');
            $name = time().'-'.$videoFiles->getClientOriginalName();
            $name = str_replace(' ','-',$name);
            $videoFiles->move('images',$name);
            $propertyList->image()->create(['image'=>$name]);
        }
        if($request->hasFile('multiImage')){
            $multiImageFiles = $request->file('multiImage');
            foreach($multiImageFiles as $file){
                $name = time().'-'.$file->getClientOriginalName();
                $name = str_replace(' ','-',$name);
                $file->move('images',$name);
                $propertyList->image()->create(['image'=>$name]);
            }
        }
        return $request->get('prefix_phone').'---'.$request->get('property_type');

    }
}
