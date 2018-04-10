<?php

use App\Article;
use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
	return [
		//
		'user_id' => 1,
		'title' => $faker->sentence,
		'content' => $faker->catchPhrase(),
		// 'published_at' => Carbon::now(),
		// 'created_at' => Carbon::now(),
		// 'updated_at' => Carbon::now(),
	];
});
