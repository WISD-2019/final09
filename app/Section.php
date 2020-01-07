<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $table = 'sections';
    protected $fillable = [
        'id',
        'start_time',
        'movie_id',
    ];
    public function Ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    public function Room()
    {
        return $this->belongsTo(Room::class);
    }
    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
