<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Carte;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Carte::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carte::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function show(Carte $carte)
    {
        return $carte;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carte $carte)
    {
        $carte->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carte $carte)
    {
        $carte->delete();
    }
}
