<?php

use Faker\Generator as Faker;

$factory->define(App\Catalog::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'description' => $faker->sentence,
		'display' => 1,
	];
});
