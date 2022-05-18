<?php

namespace App\Http\Controllers;

use App\Models\Gerant;
use App\Http\Requests\StoreGerantRequest;
use App\Http\Requests\UpdateGerantRequest;

class GerantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Gerant::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGerantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGerantRequest $request)
    {
        Gerant::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function show(Gerant $gerant)
    {
        return $gerant;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGerantRequest  $request
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGerantRequest $request, Gerant $gerant)
    {
        $gerant->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gerant  $gerant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gerant $gerant)
    {
        $gerant->delete();
    }
}
