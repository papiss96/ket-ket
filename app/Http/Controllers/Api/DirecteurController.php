<?php

namespace App\Http\Controllers;

use App\Models\Directeur;
use App\Http\Requests\StoreDirecteurRequest;
use App\Http\Requests\UpdateDirecteurRequest;

class DirecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Directeur::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDirecteurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirecteurRequest $request)
    {
        Directeur::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Directeur  $directeur
     * @return \Illuminate\Http\Response
     */
    public function show(Directeur $directeur)
    {
        return $directeur;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDirecteurRequest  $request
     * @param  \App\Models\Directeur  $directeur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirecteurRequest $request, Directeur $directeur)
    {
        $directeur->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directeur  $directeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directeur $directeur)
    {
        $directeur->delete();
    }
}
