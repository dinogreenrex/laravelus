<?php

namespace App\Http\Controllers\Api;

use App\Koala;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Monolog\Logger;

class KoalasController extends Controller
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
        return Koala::all();
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
        $koala = new Koala;

        $koala->fname = $request->get('fname');
        $koala->lname = $request->get('lname');
        $koala->height = $request->get('height');
        $koala->kilograms = $request->get('kilograms');
        $id = $koala->create()->id;
        $koala->id = $id;

        return response()->json($koala, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Koala $koala)
    {
        return $koala;
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
    public function update(Request $request, Koala $koala)
    {

        $koala->fname = $request->get('fname');
        $koala->lname = $request->get('lname');
        $koala->height = $request->get('height');
        $koala->kilograms = $request->get('kilograms');
        $koala->update();
        return response()->json($koala, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Koala $koala)
    {
        $koala->delete();
        return response()->json(null,204);
    }
}
