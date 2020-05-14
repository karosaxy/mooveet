<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTruck extends Model
{
    //

    protected $guarded =[];
    
    // protected $casts = [
    //     'truck_id' =>'array'
    // ];
        
    //eloquent relationship between Truck and their Orders....

    public function Truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
