<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


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

	public function RegisterUser(Request $request){
		
	}

	public function Logout(){
		// Auth::logout();
		// return redirect('/');
	}
}
