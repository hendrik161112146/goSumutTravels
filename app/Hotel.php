<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $table= "hotels";
    protected $primaryKey = "id";
    protected $fillable  = ['email','name','property_name','address','property_type','facilities','price','room'];
    public function gallery()
    {
        return $this->hasMany('App\GalleryImage','hotel_id');
    }

}
