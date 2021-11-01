<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\PropertyList;
use App\Models\AboutProperty;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Response;

class checkAdvancedExist extends Controller
{
    public function checkAdvancedExist(Request $request)
    {
        $allRequest = $request->all();
        $sql = "SELECT * FROM property_lists
                LEFT JOIN property_characteristics ON property_characteristics.property_list_id = property_lists.id
                LEFT JOIN general_description_of_properties ON general_description_of_properties.property_list_id = property_lists.id
                LEFT JOIN about_properties ON about_properties.property_list_id = property_lists.id WHERE 1=1";
        $allRequestValArray = array();
       
        foreach($allRequest as $index => $value){
            if($value != null && $index != '_token')
            {           
                $sql .= " AND ";    
                switch($index){
                    case 'air_conditioning': $sql .= 'air_conditioning = 1 '; break;
                    case 'bars': $sql .= 'bars = 1 '; break;
                    case 'elevators': $sql .= 'elevators = 1 '; break;
                    case 'access_for_disabled': $sql .= 'access_for_disabled = 1 '; break;
                    case 'renovated': $sql .= 'renovated = 1 '; break;
                    case 'mamad': $sql .= 'mamad = 1 '; break;
                    case 'Storage': $sql .= 'Storage = 1 '; break;
                    case 'pandor_doors': $sql .= 'pandor_doors = 1 '; break;
                    case 'Furniture': $sql .= 'Furniture = 1 '; break;
                    case 'parking': $sql .= 'parking > 0 '; break;
                    case 'balconies': $sql .= 'balconies > 0 '; break;
                    case 'square_meter_min': $sql .= 'square_meter < ? '; array_push($allRequestValArray , $value); break;
                    case 'square_meter_max': $sql .= 'square_meter > ? '; array_push($allRequestValArray , $value); break;
                    case 'min_price': $sql .= 'price > ? '; array_push($allRequestValArray , $value); break;
                    case 'max_price': $sql .= 'price < ? '; array_push($allRequestValArray , $value); break;
                    case 'general_description': $sql .= "general_description LIKE ?"; array_push($allRequestValArray , "%$value%"); break;
                    default: $sql .= $index." = ? "; array_push($allRequestValArray , $value); break;
                }
            }
        }
        
        
        $checkAdvancedExist = new Controller;
        
        $rowSelected = DB::select($sql,$allRequestValArray);
        $property_lists = $checkAdvancedExist->paginate($rowSelected);

        return view('home.realestate',['property_lists'=> $property_lists]);

        // return DB::select($sql,$allRequestValArray);
        
    }

        public function checkImageExist(Request $request){

            $image = Image::where('property_list_id','=',$request->value)->get();
            $data = [$image,$request->index];
            return Response::json($data);
        }
        public function firstImageById(Request $request){
            $property_lists = PropertyList::find($request->id)->image;
            $index = $request->index;
            if(count($property_lists)){
                $firstImage = $property_lists[0];
                $numImages = count($property_lists);
                $data = [$firstImage,$numImages,$index,$request->id];
                return Response::json($data);
            }
            return $property_lists;
        }
}
