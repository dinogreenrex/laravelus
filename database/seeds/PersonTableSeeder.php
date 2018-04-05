<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('person')->insert(
		    [
			    'fname' => str_random(10),
			    'flname' => str_random(10),
			    'height' => int_random(10),
			    'kilograms' => int_random(10),
		    ]
	    );
    }
}
