<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('admins', function (Blueprint $table) {
			$table->increments('id')->comment('id');;
			$table->string('name')->comment('管理员名称');
			$table->string('email')->unique()->comment('email');
			$table->integer('role_id')->default(0)->comment('外键角色id');
			$table->string('password')->comment('密码');
			$table->rememberToken();
			$table->string('last_ip')->comment('上次登录ip');
			$table->timestamp('last_login')->comment('上次登录时间');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('admins');
	}
}
