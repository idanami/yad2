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
        // $imagee = new Image;
        // $imagee->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSh2WifO7JjBBBBUPSHAVoNyyoLMPwbmejVig&usqp=CAU';
        // $property_list->image()->save($imagee);
        $image = Image::all();

        $checkAdvancedExist = new Controller;
        $rowSelected = DB::select('SELECT * FROM property_lists
        LEFT JOIN property_characteristics ON property_characteristics.property_list_id = property_lists.id
        LEFT JOIN general_description_of_properties ON general_description_of_properties.property_list_id = property_lists.id
        LEFT JOIN about_properties ON about_properties.property_list_id = property_lists.id');

        $property_lists = $checkAdvancedExist->paginate($rowSelected);
        // return 'kk';

        return view('home.realestate',['property_lists'=> $property_lists],['image' => $image]);
    }
    public function mobileContent(Request $request)
    {
        $property_list =  PropertyList::find($request->propertyListId);
        return view('home.mobile_content')->with('property_list',$property_list);;
    }

}
