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
		DB::table('person_address')->insert(
			[
				'street' => str_random(10),
				'city' => str_random(10),
				'country' => str_random(10),
				'kilograms' => int_random(10),
			]
		);
	}
}
