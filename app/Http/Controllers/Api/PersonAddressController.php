<?php

namespace App\Http\Controllers\Api;

use App\PersonAddress;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Monolog\Logger;


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
			$PA = new PersonAddress;

			$PA->street = $request->get('street');
			$PA->city= $request->get('city');
			$PA->country = $request->get('country');
			$PA->postcode = $request->get('postcode');
			$id = $PA->create()->id;
			$PA->id = $id;

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
