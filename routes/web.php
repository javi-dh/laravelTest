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

$this->movies = [
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


Route::get('/test', function () {
	echo "<link href='/css/app.css' rel='stylesheet'>";
	echo "<h1>Listado de películas</h1>";
	echo "<ul>";
	foreach ($this->movies as $movie) {
		echo "<li>" . $movie['title'] . ' - ' . $movie['genre'] . '</li>';
		echo "<img src='/{$movie['poster']}' width='100'>";
	}
	echo "</ul>";
});

Route::get('/movies', function () {
	dd(['Avatar', 'Titanic']);
});

Route::get('/hello/{name}/{lastname?}', function ($name, $lastname = null) {
	if ($lastname) {
		return 'Hello ' . $name . ' ' . $lastname;
	}

	return 'Hello ' . $name . ' sin apellido.';
});

Route::get('/movies/titles', function () {
	return 'Titles de movies';
});

Route::get('/saludoMama', function () {
	$alumnos = ['Dai', 'Dani', 'Ale', 'Fede'];
	dd($alumnos);
});
