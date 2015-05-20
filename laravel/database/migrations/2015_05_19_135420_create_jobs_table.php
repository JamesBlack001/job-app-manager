<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contactName')->nullable();
			$table->integer('contactNumber')->nullable();
			$table->string('contactEmail')->nullable();
			$table->string('title');
			$table->string('location');
			$table->integer('salary');
			$table->string('web_link');
			$table->string('companyName');
			$table->string('slug');
			$table->text('notes')->nullable();
			$table->text('status')->nullable();
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
		Schema::drop('jobs');
	}

}
