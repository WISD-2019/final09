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
Route::get('/reservation2',['as'=>'reservation.index2','uses'=> 'ReservationController@index']);

Route::get('/searchtime',['as'=>'searchtime.index','uses'=> 'SearchTimeController@index']);

Auth::routes();

Route::get('/home/', 'HomeController@index')->name('index');

//後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'DashboardController@index']);
    Route::get('movies/{id}/edit', ['as' => 'admin.edit'  , 'uses' => 'AdminController@edit']);
    Route::get('movies'          , ['as' => 'admin.index' , 'uses' => 'AdminController@index']);
    Route::get('movies/create'   , ['as' => 'admin.create', 'uses' => 'AdminController@create']);
    Route::patch('movies/{id}',    ['as' => 'admin.posts.update', 'uses' => 'AdminController@update']);
    Route::post('movies',['as'=>'admin.store','uses'=> 'AdminController@store']);
    Route::delete('movies/{id}'  , ['as' => 'admin.destroy', 'uses' => 'AdminController@destroy']);
});
