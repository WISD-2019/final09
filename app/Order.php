<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'movie_name',
        'section_start_time',
        'sheets',
    ];
    public function Ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
    public function Section()
    {
        return $this->belongsTo(Section::class);
    }
}
