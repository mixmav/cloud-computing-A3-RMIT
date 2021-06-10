<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function __construct() {
		$this->middleware('guest', ['except' => ['Logout']]);
	}

	public function LoginPage(){
		return view('auth.login');
	}

	public function RegisterPage(){
		return view('auth.register');
	}

	public function LoginUser(){

	}

	public function RegisterUser(){
		

		


	}

	public function Logout(){
		// Auth::logout();
		// return redirect('/');
	}
}
