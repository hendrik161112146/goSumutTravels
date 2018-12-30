<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    //
    protected $table = 'gallery_images';
    protected $primaryKey = 'id';
    protected $fillable = ['image_path','object_id','hotel_id'];

    public function object()
    {
        return $this->hasOne('App\TouristObject','id');
    }
    public function hotel()
    {
        return $this->hasOne('App\Hotel','id');
    }
}
