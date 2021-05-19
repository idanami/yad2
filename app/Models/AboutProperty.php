<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutProperty extends Model
{
    use HasFactory;

    protected $table = 'about_properties';

    public function propertyList(){
        return $this->belongsTo(PropertyList::class);
    }
}
