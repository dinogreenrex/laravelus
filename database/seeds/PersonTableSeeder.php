<?php

use App\Person;
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
	    DB::table('person')->insert([
		    'fname' => str_random(10),
		    'lname' => str_random(10),
		    'height' => rand(150,300),
		    'kilograms'=> rand(60,150)
	    ]);
    }
}
