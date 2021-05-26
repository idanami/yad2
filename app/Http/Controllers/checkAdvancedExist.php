<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\PropertyList;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class checkAdvancedExist extends Controller
{
    public function checkAdvancedExist(Request $request)
    {
        // sql command
        $sql = "SELECT * FROM property_lists
                LEFT JOIN property_characteristics ON property_characteristics.property_list_id = property_lists.id
                LEFT JOIN general_description_of_properties ON general_description_of_properties.property_list_id = property_lists.id
                LEFT JOIN about_properties ON about_properties.property_list_id = property_lists.id ";

        // field form db tables
        $tableField =   array(
                        'property_includes' => array('air_conditioning' , 'bars' , 'elevators' , 'access_for_disabled' , 'renovated', 'mamad' , 'Storage' , 'pandor_doors' , 'Furniture'),
                        'about_properties' => array('city','min_price','max_price','floor_min','floor_max','size_min','size_max'),
                        'general_description_of_properties' => array('free_search','parking','entry_date','balconies')
                        );
        $propertiesArray = array();

        $fieldPropertyIncludesSelectedArray = array();
        $fieldAboutPropertiesSelectedArray = array();
        $fieldAboutGeneralDescriptionSelectedArray = array();


        //     checking all value from input   //
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
        foreach($tableField['general_description_of_properties'] as $index => $propertyList){
            if($request->$propertyList == 'on')
                array_push($fieldAboutGeneralDescriptionSelectedArray , $propertyList);
            else if($request->$propertyList != '')
                array_push($fieldAboutGeneralDescriptionSelectedArray , $propertyList);
        }

        //  if at least 1 from all value input not empty insert where to query command  //
        if(count($fieldPropertyIncludesSelectedArray) || count($fieldAboutPropertiesSelectedArray) || count($fieldAboutGeneralDescriptionSelectedArray))
            $sql .= "WHERE ";
        // if at least 1 value input not empty compare value input with db value
        foreach($fieldAboutGeneralDescriptionSelectedArray as  $index => $fieldSelected){
            switch($fieldSelected){
                case 'free_search': $sql .= "general_description = ".$request->$fieldSelected;
                             break;
                case 'parking': $sql .= "parking = 1 ";
                             break;
                case 'entry_date': $sql .= "entry_date = ".$request->entry_date;
                             break;
                case 'balconies': $sql .= "balconies = 1 ";
                             break;
            }
            if((($index+1) != count($fieldAboutGeneralDescriptionSelectedArray)) || count($fieldAboutPropertiesSelectedArray) || count($fieldPropertyIncludesSelectedArray))
                $sql .= " AND ";
        }

        foreach($fieldPropertyIncludesSelectedArray as $index => $fieldSelected){
            $sql .= $fieldSelected." = 1 ";
            if((($index+1) != count($fieldPropertyIncludesSelectedArray)) || count($fieldAboutPropertiesSelectedArray))
                $sql .= " AND ";
        }
        foreach($fieldAboutPropertiesSelectedArray as $index => $fieldSelected){
            switch($fieldSelected){
                case 'city': $sql .= "city = ".$request->$fieldSelected;
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
        $rowSelected = DB::select($sql);

        $checkAdvancedExist = new Controller;
        $property_lists = $checkAdvancedExist->paginate($rowSelected);
        $image = Image::all();
        return view('home.realestate' , ['property_lists' => $property_lists],['image'=>$image]);
    }
        public function checkImageExist(Request $request){

            $property_lists =PropertyList::find($request->id);
            $rowNumber= count($property_lists->image);
            return $rowNumber;

        }

}
