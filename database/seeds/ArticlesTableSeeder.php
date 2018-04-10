<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		DB::table('articles')->insert([
			'title' => str_random(10),
			'content' => str_random(20) . '@gmail.com',
			'published_at' => Carbon::now(),
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}
}
