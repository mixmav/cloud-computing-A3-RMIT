<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Ellaisys\Cognito\Auth\RegistersUsers;
use Ellaisys\Cognito\Auth\VerifiesEmails;


class AuthController extends Controller
{
	use RegistersUsers;
	use VerifiesEmails;

	// public function __construct() {
	// 	$this->middleware('guest', ['except' => ['Logout']]);
	// }

	public function LoginPage(){
		return view('auth.login');
	}

	public function RegisterPage(){
		return view('auth.register');
	}

	public function LoginUser(){

	}

	public function RegisterUser(Request $request){
		
		$collection = collect($request->all());
        $data = $collection->only('name', 'email', 'password');

		if ($cognitoRegistered=$this->createCognitoUser($data)) {

			//If successful, create the user in local db
			User::create($collection->only('name', 'email'));
		} //End if
	}

	public function Logout(){
		// Auth::logout();
		// return redirect('/');
	}
}
