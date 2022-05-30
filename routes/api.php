<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route :: get ( '/login' , 'App\Http\Controllers\Api\UserController@login' );

Route :: get ( 'register' , 'App\Http\Controllers\Api\UserController@register' );

Route :: get ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@index' );
Route :: get ( '/terrain/{loaclisation}' , 'App\Http\Controllers\Api\TerrainController@index' );
 Route :: get ( '/creneaux' , 'App\Http\Controllers\Api\CreneauxController@index' );
Route :: get ( '/creneaux/{id_terrain}' , 'App\Http\Controllers\Api\CreneauxController@index' );
Route :: get ( '/contact' , 'App\Http\Controllers\Api\ContactController@index' );

Route :: apiresource ( '/reservation/{id_creneaux}' , 'App\Http\Controllers\Api\ReservationController' );

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();

    Route :: apiressource ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@store' );
   // Route :: put ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@update' );
    Route :: delete ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@destroy' );
    Route :: get ( '/terrain/{id_gerant}' , 'App\Http\Controllers\Api\TerrainController@index' );

    Route :: ressource ( '/users' , 'App\Http\Controllers\Api\UserController' );

    Route :: apiresource ( '/reservation' , 'App\Http\Controllers\Api\ReservationController' );
    Route :: delete ( '/reservation' , 'App\Http\Controllers\Api\ReservationController@destroy' );

    Route :: apiressource ( '/creneaux' , 'App\Http\Controllers\Api\CreneauxController' );

    Route :: apiresource ( '/paiement' , 'App\Http\Controllers\Api\PaiementController' );
    Route :: delete ( '/paiement' , 'App\Http\Controllers\Api\PaiementController@destroy' );

    Route :: apiresource ( '/complexeSportif' , 'App\Http\Controllers\Api\ComplexeSportifController' );
    Route :: get ( '/complexeSportif/{id}' , 'App\Http\Controllers\Api\ComplexeSportifController' ); //recherche avec id du complexe 
    Route :: delete ( '/complexeSportif' , 'App\Http\Controllers\Api\ComplexeSportifController@destroy' );

    Route :: apiresource ( '/contact' , 'App\Http\Controllers\Api\ContactController' );
    Route :: delete ( '/contact' , 'App\Http\Controllers\Api\ContactController@destroy' );
});
