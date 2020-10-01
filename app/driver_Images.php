<?php

namespace App;
use App\myVehicles;
use Illuminate\Database\Eloquent\Model;

class driver_Images extends Model
{
    protected $guarded=[];
    protected $table = 'driver_images';
    protected $primaryKey = 'user_id';
    public function myVehicles()
    {
        return $this->hasOne(myVehicles::class);

    }
}
