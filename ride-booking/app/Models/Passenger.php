<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = 'passenger';



    public function rides():HasMany{
        return $this->hasMany(Ride::class);
    }
}
