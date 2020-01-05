<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Section;
use Illuminate\Http\Request;

class SearchTimeController extends Controller
{
    //
    public function index()
    {
        $movies = Movie::all();
        $sections=Section::all();
        return view('searchtime', [
            'movies' => $movies,
            'sections'=>$sections,
        ]);
    }
}
