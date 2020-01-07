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
//MovieIndex
Route::get('/', 'MovieController@index');
//reservation
Route::get('/reservation',['as'=>'reservation.index','uses'=> 'ReservationController@index']);
Route::post('/reservation',['as'=>'reservation.store','uses'=> 'ReservationController@store']);
Route::get('/done', 'ReservationController@index2');
//searchtime
Route::get('/searchtime',['as'=>'searchtime.index','uses'=> 'SearchTimeController@index']);
//Auth
Auth::routes();

Route::get('/home/', 'HomeController@index')->name('index');

//後台
//電影管理
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'DashboardController@index']);
    Route::get('/movies/{id}/edit', ['as' => 'admin.movie.edit'  , 'uses' => 'AdminController@edit']);
    Route::get('/movies'          , ['as' => 'admin.movie.index' , 'uses' => 'AdminController@index']);
    Route::get('/movies/create'   , ['as' => 'admin.movie.create', 'uses' => 'AdminController@create']);
    Route::patch('/movies/{id}',    ['as' => 'admin.movie.update', 'uses' => 'AdminController@update']);
    Route::post('/movies',['as'=>'admin.movie.store','uses'=> 'AdminController@store']);
    Route::delete('/movies/{id}'  , ['as' => 'admin.movie.destroy', 'uses' => 'AdminController@destroy']);
//場次管理
    Route::get('/sections/{id}/edit', ['as' => 'admin.section.edit'  , 'uses' => 'AdminsectionController@edit']);
    Route::get('/sections', ['as' => 'admin.section.index', 'uses' => 'AdminsectionController@index']);
    Route::get('/sections/create', ['as' => 'admin.section.create', 'uses' => 'AdminsectionController@create']);
    Route::patch('/sections/{id}', ['as' => 'admin.section.update', 'uses' => 'AdminsectionController@update']);
    Route::post('/sections', ['as' => 'admin.section.store', 'uses' => 'AdminsectionController@store']);
    Route::delete('/sections/{id}', ['as' => 'admin.section.destroy', 'uses' => 'AdminsectionController@destroy']);
});
