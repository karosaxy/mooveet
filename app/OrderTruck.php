<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTruck extends Model
{
    //

    protected $guarded =[];
    

        
    //eloquent relationship between Truck and their Orders....

    public function Truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
