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
	return ['Hola', 'Chau'];
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
