<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts',function($table){

			$table->increments('id');
			$table->integer('author_id')->unsigned();
			$table->string('title');
			$table->longText('content');
			$table->string('location');
			$table->string('contact_number');
			$table->tinyInteger('status'); //0 - disapprove | 1 - approve (to be implemented in the future. if we win :P )
			$table->tinyInteger('type'); // 0 - without booking | 1 - with booking
			$table->string('category');
			$table->string('image');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
