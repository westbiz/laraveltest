<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('categories')->insert([
			'name' => '旅游',
			'parent_id' => 0,
			'descrition' => '旅游、旅行、度假、邮轮、自由行等',
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}
}
