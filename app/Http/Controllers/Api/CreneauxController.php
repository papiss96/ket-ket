<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Creneaux;
use Illuminate\Http\Request;

class CreneauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Creneaux::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Creneaux::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Creneaux  $creneaux
     * @return \Illuminate\Http\Response
     */
    public function show(Creneaux $creneaux)
    {
        return $creneaux;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Creneaux  $creneaux
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Creneaux $creneaux)
    {
        $creneaux->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Creneaux  $creneaux
     * @return \Illuminate\Http\Response
     */
    public function destroy(Creneaux $creneaux)
    {
        $creneaux->delete();
    }
}
