<?php

use App\Actor;

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
	return view('home');
});

Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/genres', 'GenresController@index');

Route::get('/actors', function()
{
	$actors = \App\Actor::find(13);

	dd($actors->movies);
});

Route::get('/actors/{id}', function($id) {
	$actor = \App\Actor::find($id);
	return $actor->movies;
});


Route::get('/test', function ()
{
	return DB::table('series')->where('id', 1)->get();
});
