<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():
    {
        
        return Terrain::all();
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $terrain = Terrain::create([


        'idComplexeSportif'=> $request->idComplexeSportif;
        'id_gerant'=> $request->id_gerant;
        'longueur'=> $request->longueur;
        'largeur'=> $request->largeur;
        'joueurs'=> $request->joueurs;
        'prixHeure'=> $request->prixHeure;
        'statut'=> $request->statut;
        'idPhotos'=> $request->idProtos;
        'type'=> $request->type;
        'localisation'=> $request->localisation;

            //si le terrainn doit avoir une image 
            //'image_url' => $request->image_url
        ]);
        
        return response()->json([
            'status' => (bool) $terrain,
            'data'   => $terrain,
            'message' => $terrain ? 'Terrain Created!' : 'Error Creating Terrain'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function show(Terrain $terrain)
    {
        
        return response()->json($terrain,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terrain $terrain)
    {
        $status = $product->update(
            $request->only(['idComplexeSportif','id_gerant','longueur','largeur','joueurs','prixHeure','statut','idPhotos','type','localisation'])
        );
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Terrain Updated!' : 'Error Updating Terrain'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terrain $terrain)
    {
        $status = $terrain->delete();
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Terrain Deleted!' : 'Error Deleting Terrain'
        ]);
    }
}
