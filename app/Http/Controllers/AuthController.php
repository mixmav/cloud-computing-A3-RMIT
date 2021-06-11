<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

	public function LoginUser(Request $request)
	{
		$credentials = $request->validate([
			'email' => 'required',
			'password' => 'required',
		]);

		if (Auth::attempt($credentials)) {
			$request->session()->regenerate();
			return redirect()->intended('/');
		}

		return back()->withErrors('Invalid credentials');
	}

	public function RegisterUser(Request $request){
		$request->validate([
			'email' => 'bail|email|unique:users|required',
			'password' => 'min:6|required',
		]);
		
		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->save();

		Auth::login($user);

		$request->session()->regenerate();
		return redirect()->intended('/');
	}

	public function Logout(){
		Auth::logout();
		return redirect('/');
	}
}