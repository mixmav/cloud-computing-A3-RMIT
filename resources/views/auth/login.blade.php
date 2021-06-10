@extends('auth.layout')

@section('auth-content')
	<h1>Login</h1>
	<form action="/auth/login" method="POST">
		<input type="email" class="text-input full-width" placeholder="Email" name="email" autofocus="" required>
		<input type="password" class="text-input full-width" placeholder="Password" name="password" required>
		{{ csrf_field() }}
		<button type="submit" class="btn full-width mt-30 green"><i class="fa fa-paper-plane"></i>Login</button>
	</form>
@endsection