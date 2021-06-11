@extends('auth.layout')

@section('auth-content')
	<h1>Register</h1>
	
	<form action="/auth/register" method="POST">
		<input type="text" class="text-input full-width" placeholder="Your name" name="name" autofocus="" required value="{{ old('name') }}">
		<input type="email" class="text-input full-width" placeholder="Email" name="email" required value="{{ old('email') }}">
		<input type="password" class="text-input full-width" placeholder="Password" name="password" required>
		{{ csrf_field() }}
		<button type="submit" class="btn full-width mt-30 green"><i class="fa fa-plus"></i>Register</button>
	</form>
@endsection