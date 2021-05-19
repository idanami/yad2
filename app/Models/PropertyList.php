<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyList extends Model
{
    use HasFactory;

    protected $table = 'property_lists';

    public function contact(){
        return $this->belongsTo(Contact::class);
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
    }
    public function image(){
        return $this->hasMany(Image::class);
    }
    public function propertyCharacteristics(){
        return $this->hasMany(PropertyCharacteristics::class);
    }
    public function aboutPropertys(){
        return $this->hasMany(AboutProperty::class);
    }
    public function generalDescriptionOfProperty(){
        return $this->hasMany(GeneralDescriptionOfProperty::class);
    }
}
