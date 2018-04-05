<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		$person = factory(PersonAddress::class,10)->create();

	}
}
