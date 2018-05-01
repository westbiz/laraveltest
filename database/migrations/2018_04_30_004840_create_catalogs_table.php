<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('catalogs', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->comment('栏目名称');
			$table->string('description')->comment('描述');
			$table->tinyInteger('display')->default(0)->comment('0为显示，1不显示');
			$table->timestamps();
			$table->comment = '栏目表';
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('catalogs');
	}
}
