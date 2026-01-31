<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'driver';
   



    public function rides():HasMany {
        return $this->hasMany(Ride::class);
    }

}
