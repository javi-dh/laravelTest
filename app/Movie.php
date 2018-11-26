<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	// $table = String
	// Asigna un nombre de table en particular
	// protected $table = 'movies';
	// Si cumplimos las convenciones de Laravel no necesitamos este atributo

	// $fillable = Array
	// Define las columnas que pueden ser llenadas
	protected $fillable = ['title', 'rating', 'awards', 'release_date', 'genre_id', 'length'];

	// $guarded = [] (default vacío)
	// Define las columnas protegidas
	// Por default
	// protected $guarded = ['poster'];
}
