<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perporty extends Model
{
    use HasFactory;

    protected $table = 'property';

    public $timestamps = false;

    public function propertyImage()
    {
        return $this->hasOne(PropertyImage::class,'property_id','id');
    }

    public function propertyOption()
    {
        return $this->hasOne(PropertyOptions::class,'property_id','id');
    }

    public function PropertySmartphone()
    {
        return $this->hasOne(PropertySmartphone::class,'property_id','id');
    }
}
