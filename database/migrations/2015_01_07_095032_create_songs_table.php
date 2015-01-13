<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('artist');
			$table->string('albumart');
			$table->string('producer')->nullable();
			$table->string('playcount');
			$table->string('dlcount');
			$table->string('link');
			$table->string('slug')->unique();
			$table->string('genre');
			$table->string('album');
			$table->string('video')->nullable();
			$table->text('videodesc')->nullable();
			$table->text('lyrics')->nullable();
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
		Schema::drop('songs');
	}

}
