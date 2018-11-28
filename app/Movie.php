<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

	// Para guardar películas

	// Definir las columnas que puede ser llenadas
	protected $fillable = ['title', 'rating', 'awards', 'release_date'];
}
