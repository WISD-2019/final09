<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movie::all();

        return view('home/index', [
            'movies' => $movies,
        ]);
    }
    public function type()
    {
        $type=Auth::user()->type;
        if($type == 0){
            return redirect('/admin');
        }
        else{
            return redirect('/home');
        }
    }
}
