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

Route :: apiresource ( '/reservation' , 'App\Http\Controllers\Api\ReservationController' );

Route :: post ( '/login' , 'App\Http\Controllers\Api\UserController@login' );

Route :: post ( 'register' , 'App\Http\Controllers\Api\UserController@register' );

Route :: get ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@index' );
Route :: get ( '/contact' , 'App\Http\Controllers\Api\ContactController@index' );

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();

    Route :: post ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@store' );
    Route :: put ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@update' );
    Route :: delete ( '/terrain' , 'App\Http\Controllers\Api\TerrainController@destroy' );

    Route :: ressource ( '/users' , 'App\Http\Controllers\Api\UserController' );

    Route :: apiresource ( '/reservation' , 'App\Http\Controllers\Api\ReservationController' );
    Route :: delete ( '/reservation' , 'App\Http\Controllers\Api\ReservationController@destroy' );

    Route :: ressource ( '/creneaux' , 'App\Http\Controllers\Api\CreaneauxController' );

    Route :: apiresource ( '/paiement' , 'App\Http\Controllers\Api\PaiementController' );
    Route :: delete ( '/paiement' , 'App\Http\Controllers\Api\PaiementController@destroy' );

    Route :: apiresource ( '/contact' , 'App\Http\Controllers\Api\ContactController' );
    Route :: delete ( '/contact' , 'App\Http\Controllers\Api\ContactController@destroy' );
});
