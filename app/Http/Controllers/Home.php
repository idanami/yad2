<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\PropertyList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class Home extends Controller
{
    public function realestate()
    {
        // $user = new User;
        // $user->name = 'idan';
        // $user->email = 'idanaminov5@gmail.com';
        // $user->password = 'aaaaaa';
        // $user->phoneNumber = '0564188';
        // $user->dateOfBirth = '13/12/1996';
        // $user->save();
        // $user->phoneNumber = $request->phoneNumber;
        // $user->dateOfBirth = $request->dateOfBirth;
        // $property_lists =  PropertyList::paginate(50);
        // $property_list = PropertyList::all();
        // $property_list = PropertyList::find(1);

        // $imagee = new Image;
        // $imagee->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-sqI1j6i3xbykbsCa08etuakK5egN5WCUxg&usqp=CAU';
        // $property_list->image()->save($imagee);
        $image = Image::all();
        // return $image;
        // $found_key = array_search('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVJaAkILs4SUenPwEHMobUJFQxhdgnTUv3sA&usqp=CAU', array_column($image, 'image'));
        $checkAdvancedExist = new Controller;

        $rowSelected = DB::select('SELECT * FROM property_lists
        LEFT JOIN property_characteristics ON property_characteristics.property_list_id = property_lists.id
        LEFT JOIN general_description_of_properties ON general_description_of_properties.property_list_id = property_lists.id
        LEFT JOIN about_properties ON about_properties.property_list_id = property_lists.id');

        $property_lists = $checkAdvancedExist->paginate($rowSelected);

        return view('home.realestate',['property_lists'=> $property_lists],['image' => $image]);
    }
    public function mobileContent(Request $request)
    {
        $property_list =  PropertyList::find($request->propertyListId);
        return view('home.mobile_content')->with('property_list',$property_list);;
    }

}
