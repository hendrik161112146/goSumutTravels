<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TouristObject extends Model
{
    //
    protected $table = 'object_tourists';
    protected $primaryKey = 'id';
    protected $fillable = ['object_description','object_title','object_view','category_id'];

    public function gallery()
    {
        return $this->hasMany('App\GalleryImage','object_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category','id','category_id');
    }
}
