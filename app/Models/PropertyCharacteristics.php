<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCharacteristics extends Model
{
    use HasFactory;

    protected $table = 'property_characteristics';

    public function propertyList(){
        return $this->belongsTo(PropertyList::class);
    }
}
