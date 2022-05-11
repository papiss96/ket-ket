<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Liquide;
use Illuminate\Http\Request;

class LiquideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Liquide::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Liquide::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Liquide  $liquide
     * @return \Illuminate\Http\Response
     */
    public function show(Liquide $liquide)
    {
        return $liquide;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Liquide  $liquide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Liquide $liquide)
    {
        $liquide->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liquide  $liquide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liquide $liquide)
    {
        $liquide->delete();
    }
}
