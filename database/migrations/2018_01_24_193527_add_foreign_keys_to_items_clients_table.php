<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToItemsClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('items_clients', function(Blueprint $table)
		{
			$table->foreign('clientid', 'IC_clientsid')->references('clientid')->on('clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('itemsid', 'IC_itemsid')->references('itemid')->on('items')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('items_clients', function(Blueprint $table)
		{
			$table->dropForeign('IC_clientsid');
			$table->dropForeign('IC_itemsid');
		});
	}

}
