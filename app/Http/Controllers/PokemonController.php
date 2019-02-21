<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PokemonController extends Controller
{
    public function index() {
    	$pokemonData = \App\pokemon::all();
		return $pokemonData;
    }

    public function show() {
    	$id = request()->id;
    	$pokemon = DB::table('pokemon')->where('id', $id)->get();
    	return $pokemon;
    }
}
