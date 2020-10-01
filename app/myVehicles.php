<?php

namespace App;
use App\driver_images;

use Illuminate\Database\Eloquent\Model;

class myVehicles extends Model
{protected $guarded=[];
    public function driver_images()
    {
        return $this->hasMany(driver_images::class);
    }
}
