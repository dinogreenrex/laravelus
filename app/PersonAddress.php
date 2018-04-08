<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonAddress extends Model
{
	protected $table = "person_address";
	public $timestamps = false;
	protected $fillable = [
		'street', 'city', 'country', 'postalcode'
	];
}
