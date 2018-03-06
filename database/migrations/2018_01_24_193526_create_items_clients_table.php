<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items_clients', function(Blueprint $table)
		{
			$table->increments('itemsclientsid');
			$table->integer('itemsid')->unsigned()->index('IC_itemsid_idx');
			$table->integer('clientid')->unsigned()->index('IC_clients_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items_clients');
	}

}
