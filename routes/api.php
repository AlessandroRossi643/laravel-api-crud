<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movies','Api\MoviesController@index'); // -> Rotta che mi recupera tutti i film
Route::get('/movies/{id}','Api\MoviesController@show'); // -> Rotta che mi fa vedere un film dato un preciso id
