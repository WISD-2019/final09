<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public function Order()
    {
        return $this->belongsTo(Order::class);
    }
    public function Section()
    {
        return $this->belongsTo(Section::class);
    }
}
