<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonAddress extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person_address', function (Blueprint $table) {
			$table->increments('person_address_id');
			$table->string('street')->nullable()->index('street');
			$table->string('city')->nullable()->index('city');
			$table->string('country')->nullable()->index('country');
			$table->integer('postalcode')->nullable()->index('postalcode');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('person_address');
	}
}
