<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table = 'movies';
    protected $fillable = [
        'id',
        'name',
        'introduction',
        'director',
        'actor',
        'photo_url',
        'length',
        'start_date',
    ];
    public function Section()
    {
        return $this->hasMany(Section::class);
    }
}
