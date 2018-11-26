<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
	protected $fillable = ['first_name', 'last_name'];

	// Método que devuelve el nombre completo de cada actor
	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}
}
