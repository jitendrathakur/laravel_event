<?php

use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table){

			$table->increments('id');
			$table->integer('managers_id');
			$table->string('title');
			$table->text('description');
			$table->string('venue');
			$table->string('picture');
			$table->string('start_date');
			$table->string('end_date');
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
		Schema::drop('events');
	}

}