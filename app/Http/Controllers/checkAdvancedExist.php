<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\PropertyList;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class checkAdvancedExist extends Controller
{
    public function checkAdvancedExist(Request $request)
    {
        // sql command
        $sql = "SELECT * FROM property_lists
                JOIN property_characteristics ON property_characteristics.property_list_id = property_lists.id
                JOIN about_properties ON about_properties.property_list_id = property_lists.id ";

        // field form db tables
        $tableField =   array(
                        'property_includes' => array('air_conditioning' , 'bars' , 'elevators' , 'access_for_disabled' , 'renovated', 'mamad' , 'Storage' , 'pandor_doors' , 'Furniture'),
                        'about_properties' => array('city','min_price','max_price','floor_min','floor_max','size_min','size_max'),
                        // 'about_properties' => array('city','price','floor_number','square_meter'),
                        'general_description_of_properties' => array('general_description','parking','entry_date','balconies')
                        );
        $propertiesArray = array();

        $fieldPropertyIncludesSelectedArray = array();
        $fieldAboutPropertiesSelectedArray = array();

        // Check field from from that not empty
        foreach($tableField['property_includes'] as $index => $propertyList){
            if($request->$propertyList == 'on')
                array_push($fieldPropertyIncludesSelectedArray , $propertyList);
        }

        foreach($tableField['about_properties'] as $index => $propertyList){
            if($request->$propertyList != ''){
                $item = array($propertyList => $request->$propertyList);
                if($propertyList == 'city')
                    array_push($fieldAboutPropertiesSelectedArray , $propertyList);
                if(($propertyList == 'min_price') || ($propertyList == 'max_price'))
                    array_push($fieldAboutPropertiesSelectedArray , $propertyList);
                if(($propertyList == 'floor_min') || ($propertyList == 'floor_max'))
                    array_push($fieldAboutPropertiesSelectedArray , $propertyList);
                if(($propertyList == 'size_min') || ($propertyList == 'size_max'))
                    array_push($fieldAboutPropertiesSelectedArray , $propertyList);
            }
        }
        if(count($fieldPropertyIncludesSelectedArray) || count($fieldAboutPropertiesSelectedArray))
            $sql .= "WHERE ";

        foreach($fieldPropertyIncludesSelectedArray as $index => $field){
            $sql .= $field." = 1 ";
            if((($index+1) != count($fieldPropertyIncludesSelectedArray)) || count($fieldAboutPropertiesSelectedArray))
                $sql .= " AND ";
        }
        foreach($fieldAboutPropertiesSelectedArray as $index => $fieldSelected){
            switch($fieldSelected){
                case 'city': $sql .= "city = '$request->$fieldSelected'";
                             break;
                case 'min_price': $sql .= "price > ".$request->$fieldSelected;
                             break;
                case 'max_price': $sql .= "price < ".$request->$fieldSelected;
                             break;
                case 'floor_min': $sql .= "floor_number > ".$request->$fieldSelected;
                             break;
                case 'floor_max': $sql .= "floor_number < ".$request->$fieldSelected;
                             break;
                case 'size_min': $sql .= "square_meter > ".$request->$fieldSelected;
                             break;
                case 'size_max': $sql .= "square_meter < ".$request->$fieldSelected;
                             break;
            }
            if (count($fieldAboutPropertiesSelectedArray) != ($index+1))
                $sql .= " AND ";

        }
        $property_lists = DB::select($sql);
        $selectedRows= array();
        foreach($property_lists as $index => $stam){
            array_push($selectedRows,$stam->id);
        }
        // return $sql;

        if((count($fieldPropertyIncludesSelectedArray)) || (count($fieldAboutPropertiesSelectedArray)))
            $property_lists = PropertyList::whereIn('id', $selectedRows)->paginate(50);
        else
            $property_lists = PropertyList::paginate(50);

        // return back()->with('property_lists' , $property_lists);
        return view('home.realestate' , ['property_lists' => $property_lists]);
        // return view('home.realestate' , ['property_lists' => $property_lists]);
    }
}
