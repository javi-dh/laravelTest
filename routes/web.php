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

Route::get('/movies', 'MoviesController@index');

Route::get('/movie-detail/{title}', 'MoviesController@detail');


Route::get('/movies-sin-controller', function () {
	$movies = [
		['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
		['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
		['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
		['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
		['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
		['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
		['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
		['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
		['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
		['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama']
	];

	echo "<link href='/css/app.css' rel='stylesheet'>";
	echo "<h1>Listado de películas</h1>";
	echo "<h2>ESTO RUTA NO USA CONTROLLER</h2>";
	echo "<ul>";
	foreach ($movies as $movie) {
		echo "<li>" . $movie['title'] . ' - ' . $movie['genre'] . '</li>';
		echo "<img src='/{$movie['poster']}' width='100'>";
	}
	echo "</ul>";
});
