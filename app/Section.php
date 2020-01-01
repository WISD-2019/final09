<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    public function Ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    public function Room()
    {
        return $this->belongsTo(Room::class);
    }
}
