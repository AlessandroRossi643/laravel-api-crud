<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class MoviesController extends Controller
{
  public function index(){
    return response()->json(Movie::all());
  }

  public function show($id){
    $movie=Movie::find($id);
    if(empty($movie)){
      return response()->json([
        'error'=> 'Non esiste un film con questo id: ' . $id
      ]);
    }
    return response()->json($movie);
  }
}
