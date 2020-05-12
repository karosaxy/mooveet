<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded =[];
    
    //eloquent relationship between TruckDrivers and their trucks....

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //eloquent relationship between Trucks and their OrderTruck(scan for a Driver)....

    public function OrderTruck()
    {
        return $this->hasMany(OrderTruck::class);
    }
}
