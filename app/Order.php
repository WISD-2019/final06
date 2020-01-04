<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function Ticket(){
        return $this->hasMany(Ticket ::class);
    }
    public function To_Order(){
        return $this->belongsTo(User::class,'member_id');
    }
}
