<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'id',
        'name',
        'category',
        'introduction',
        'length',
        'startDate',
        'endDate',
        'room_id',
    ];

    public function Room(){
        return $this->belongsTo(Room::class);
    }
    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
