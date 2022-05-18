<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Http\Requests\StoreJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Joueur::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJoueurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJoueurRequest $request)
    {
        Joueur::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return $joueur;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJoueurRequest  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJoueurRequest $request, Joueur $joueur)
    {
        $joueur->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();
    }
}
