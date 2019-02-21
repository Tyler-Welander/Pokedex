<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function store() {
    	$username = request()->username;
    	$password = request()->password;
		if (DB::table('users')->where([
			['name', $username],
			['password', $password] ])->doesntExist()) {
			return 'Invalid username or password';
		}
		if (empty($username) ||  empty($password)) {
			return "Please provide a username and password";
		}
		return view('user_welcome', ['username' => $username]);
    }
}
