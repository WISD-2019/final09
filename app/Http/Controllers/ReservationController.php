<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Order;
use App\Room;
use App\Section;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function __construct(Request $request)
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $movies = Movie::all();
        $sections=Section::all();
        return view('reservation', [
            'movies' => $movies,
            'sections'=>$sections,
        ]);
    }
    public function index2()
    {
        return view('done');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Order::create($request->all());
        return redirect()->route('reservation2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $order=Order::find($id);
        $order->update($request->all());
        return redirect()->route('reservation2');
    }
}
