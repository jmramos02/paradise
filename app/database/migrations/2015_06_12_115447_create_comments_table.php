<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments',function($table){
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->longText('comment');
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('post_id')->references('id')->on('posts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
