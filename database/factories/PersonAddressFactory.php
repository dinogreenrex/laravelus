<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\PersonAddress::class, function (Faker $faker) {
	return [
		'street' => $faker->streetAddress,
		'city' => $faker->city,
		'country' => $faker->country,
		'postalcode' => $faker->numberBetween(1000,2000),
	];
});
