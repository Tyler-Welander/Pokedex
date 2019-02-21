<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CaptureController extends Controller
{
    public function index() {
			$username = request()->username;
			$captured = DB::table('captureds')->leftJoin('pokemon', 'pokemon.id', '=', 'captureds.id')
									->where('captureds.username', '=', $username)->select('pokemon.*')->get();
			return $captured; 
		}

    public function update() {
    	$id = request()->id;
    	$username = request()->username;
			$captured = new \App\captured();
			$captured->id = $id;
			$captured->username = $username;
			$captured->save();
    }
}
