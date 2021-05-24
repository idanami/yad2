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
use Illuminate\Support\Facades\DB;

class Home extends Controller
{

    public function test(){
        return 'aaaaaa';
    }
    public function realestate()
    {
        $property_lists =  PropertyList::paginate(25);
        // listings()

        // return view('home.realestate' , compact('property_lists'));
        // return view('home.realestate');
        return view('home.realestate',['property_lists'=> $property_lists]);
        // return view('home.realestate')->with(compact('property_lists'));
    }

    public function realestateForelse(Request $request , $id){
        return $id;
        // return $request->propertyListId;
        $test = array();
        $string = '';
        // return $id;
        for( $i = 0 ; $i < strlen($id) ; $i++ ){
            if($id[$i] != ','){
                $string .= $id[$i];
            }elseif($i > 0 && $id[$i] == ','){
                array_push($test,$string);
                $string = '';

            }
        }
        $property_lists = PropertyList::whereIn('id', $test)->paginate(25);
        // $property_lists =  PropertyList::paginate(2);

        return view('home.realestate' , ['property_lists' => $property_lists]);
    }

    public function mobileContent(Request $request)
    {
        $property_list =  PropertyList::find($request->propertyListId);
        return view('home.mobile_content')->with('property_list',$property_list);;
    }

}

