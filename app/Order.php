<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'check-in-Date',
        'total',
        'user_id',
        'ticket_id',
    ];
    public function Ticket(){
        return $this->hasMany(Ticket ::class);
    }
    public function To_Order(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
