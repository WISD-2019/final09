<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function Section()
    {
        return $this->hasMany(Section::class);
    }
}
