<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $table = 'ride';

   
    


    public function passenger():BelongsTo {
        return $this->belongsTo(Passenger::class);
    }

    public function driver():BelongsTo {
        return $this->belongsTo(Driver::class);
    }

}
