<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('/', 'MovieController@index');
Route::get('/reservation',['as'=>'reservation.index','uses'=> 'ReservationController@index']);
Route::get('/searchtime',['as'=>'searchtime.index','uses'=> 'SearchTimeController@index']);
Auth::routes();

Route::get('/home/', 'HomeController@index')->name('index');
