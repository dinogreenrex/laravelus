<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\FactoryBuilder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


		  $persons = factory(App\Person::class, 10)->create();
	    $personAddresses = factory(App\PersonAddress::class, 10)->create();

    }
}
