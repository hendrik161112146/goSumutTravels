<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['category'];
    public $timestamps = false;

    public function object()
    {
        return $this->belongsTo('App\TouristObject','id');
    }
}
