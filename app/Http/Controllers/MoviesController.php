<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
	protected $movies = [
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

	public function index()
	{
		// compact() me permite pasar información a una vista
		// compact() recibe un string o varios strings

		$moviesList = $this->movies;
		$username = 'Diego';
		$results = ['Titanic', 'DeadPool'];

		return view('movies')->with(compact('moviesList', 'username', 'results'));
		// return view('movies', compact('moviesList', 'username'));

		// la vista recibe una variable peliculas con el valor de $this->movies
		// la vista recibe una variable username con el valor de Pedro
		// return view('movies')->with('moviesList', $this->movies)->with('username', 'Pedro');
	}

	public function detail($title)
	{
		foreach ($this->movies as $movie) {
			if ($movie['title'] === $title) {
				$findIt = $movie;
				break;
			}
		}
		return view('movie_detail')->with(compact('findIt'));
	}
}
