<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristObject extends Model
{
    //
    protected $table = 'object_tourist';
    protected $primaryKey = 'object_id';
    protected $fillable = ['object_description','object_title','object_view'];

}
