<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function Currently_Showing(){
        return $this->hasOne(Movie::class);
    }
    public function Scheduled_Show(){
        return $this->hasMany(Movie::class);
    }
}
