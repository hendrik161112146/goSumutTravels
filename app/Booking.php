<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = ['from','to','start_date','return_date','adult','child','email','room_need','hotel_id'];

    public function hotel()
    {
        return $this->hasOne('App\Hotel','id');
    }
}
