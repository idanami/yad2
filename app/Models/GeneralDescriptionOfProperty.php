<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralDescriptionOfProperty extends Model
{
    use HasFactory;

    protected $table = 'general_description_of_properties';

    public function propertyList(){
        return $this->belongsTo(PropertyList::class);
    }
}
