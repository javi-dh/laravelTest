<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

	// Para guardar películas

	// Definir las columnas que puede ser llenadas
	protected $fillable = ['title', 'rating', 'awards', 'release_date'];

	// Relación de géneros
	public function genre()
	{
		// Si nuestra DB no cumple con los estándares de Laravel
		// return $this->belongsTo(Genre::class, 'genre_id', 'id');

		return $this->belongsTo(Genre::class);
	}

	public function actors()
	{
		// Si nuestra DB no cumple con los estándares de Laravel
		// return $this->belongsToMany(Actor::class, 'actor_movie', 'actor_id', 'movie_id');

		return $this->belongsToMany(Actor::class);
	}
}
