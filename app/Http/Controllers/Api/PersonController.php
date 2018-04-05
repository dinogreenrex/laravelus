<?php

namespace App\Http\Controllers\Api;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Monolog\Logger;

class PersonController extends Controller
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
        return Person::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view(create.koala);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person;

        $person->fname = $request->get('fname');
        $person->lname = $request->get('lname');
        $person->height = $request->get('height');
        $person->kilograms = $request->get('kilograms');
        $id = $person->create()->id;
        $person->id = $id;

        return response()->json($person, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return $person;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {

        $person->fname = $request->get('fname');
        $person->lname = $request->get('lname');
        $person->height = $request->get('height');
        $person->kilograms = $request->get('kilograms');
        $person->update();
        return response()->json($person, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return response()->json(null,204);
    }
}
