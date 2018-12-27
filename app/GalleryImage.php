<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    //
    protected $table = 'gallery_image';
    protected $primaryKey = 'image_id';
    protected $fillable = ['image_path','object_id'];
}
