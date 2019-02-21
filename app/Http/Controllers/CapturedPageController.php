<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapturedPageController extends Controller
{
    public function index() {
		return view('user_welcome');
	}
}
