<?php

namespace App\Http\Controllers\Api;

use App\PersonAddress;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Monolog\Logger;
use Illuminate\Support\Facades\DB;


class PersonAddressController extends Controller
{
		public function __construct()
		{
			$this->middleware('cors');
		}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PersonAddress::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$PA = new PersonAddress();

			$PA->street = $request->street;
			$PA->city= $request->city;
			$PA->country = $request->country;
			$PA->postalcode = $request->postcode;
			$PA->save();
			$id = $PA->id;
	    /*$insert = DB::table('person_address')->insert(
				['city' => $request->get('city'),'street' => $request->get('street'),
					'country' => $request->get('country'), 'postalcode' => $request->get('postcode')]
			);*/

			return response()->json($PA, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($personAddress)
    {
			return PersonAddress::find($personAddress);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonAddress  $personAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonAddress $personAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonAddress  $personAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonAddress $personAddress)
    {
			$personAddress->street = $request->get('street');
			$personAddress->city= $request->get('city');
			$personAddress->country = $request->get('country');
			$personAddress->postcode = $request->get('postcode');
			$personAddress->update();
			return response()->json($personAddress, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonAddress  $personAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonAddress $personAddress)
    {
        //
    }
}
