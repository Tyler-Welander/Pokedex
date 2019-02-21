<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    public function store() {
		$username = request()->username;
		$password = request()->password;
		$email = request()->email;
		if (DB::table('users')->where('name', $username)->exists()) {
			return 'Username already taken!';
		}
		if (DB::table('users')->where('email', $email)->exists()) {
			return 'Email already in use!';
		}
		if (empty($username) ||  empty($password) || empty($email)) {
			return "Please enter information into all fields";
		}
		DB::table('users')->insert(['name' => $username, 'password' => $password, 'email' => $email]);
		return view('user_welcome', ['username' => $username]);
	}
}
