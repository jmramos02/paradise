<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookings',function($table){
			
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('author_id')->unsigned();
			$table->integer('quantity');
			$table->date('booking_date');
			$table->string('contact_number');
			$table->tinyInteger('status'); /*0 = pending, 1 = not approve -1 = not approve*/
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('post_id')->references('id')->on('posts');
			$table->foreign('author_id')->references('id')->on('users');
		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookings');
	}
}
