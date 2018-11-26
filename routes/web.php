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

Route::get('/actors', 'ActorsController@index');
Route::get('/actors/{id}', 'ActorsController@show');

Route::get('/movies', function () {
	$movies =  App\Movie::where('title', 'LIKE', '%a%');
	$desc = true;
	if ($desc) {
		$movies = $movies->orderBy('title', 'asc');
	}else{
		$movies = $movies->orderBy('title', 'desc');
	}

	return $movies->get();
});
