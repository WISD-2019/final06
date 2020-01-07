<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'id',
        'name',
        'x',
        'y',
        'order_id',
        'section',
    ];


    public function Order(){
        return $this->belongsTo(Order::class);
    }
    public function Section(){
        return $this->belongsTo(Section::class);
    }
    public function Book_a_Seat(){
        return $this->hasMany(Section::class,'section_id');
    }
}
