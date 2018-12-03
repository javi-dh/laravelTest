<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
	public function movies()
	{
		// Si nuestra DB no es compatible con Laravel tenemos que pasar un 2do y 3er parámetro
		// return $this->hasMany(Movie::class, 'genre_id', 'id');

		return $this->hasMany(Movie::class);
	}
}
