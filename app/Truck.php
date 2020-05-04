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
    protected $fillable = [
        'truck_name', 'truck_size', 'truck_location', 'truck_type', 'user_id',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
