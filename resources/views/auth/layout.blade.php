@extends('layout.master')

@section('title')
	Welcome
@endsection

@section('custom-head')
	<link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
	<style>
		#top-bar{
			width: 100%;
			padding: 1em;
			display: flex;
			justify-content: space-between;
			align-items: center;
			background: #8A4FFF;
		}

		#top-bar a.heading{
			text-decoration: none;
			font-size: 1.8em;
			color: white;
		}

		#top-bar .links a{
			color: white;
		}

		#top-bar .links a:nth-child(2){
			margin-left: 10px;
		}
	
		.main-auth-content{
			padding: 1em;
			width: 100%;
			max-width: 300px;
			margin: 50px auto;
		}
		.main-auth-content h1{
			font-size: 1.4em;
			margin-bottom: 10px;
		}

		.main-auth-content form input{
			margin-top: 10px;
		}
		
		.main-auth-content .form-errors{
			margin-bottom: 30px;
		}
		.main-auth-content .form-errors li{
			color: red;
		}
	</style>
@endsection

@section('content')
	<div id="top-bar">
		<a href="/" class="text heading">{{ config('app.name') }}</a>
		<div class="links">
			<a href="/auth/login" class="link">Login</a>
			<a href="/auth/register" class="link">Register</a>
		</div>
	</div>

	<div class="main-auth-content">
		<h3>Welcome to {{ config('app.name') }}</h3>
		<br>
		@if ($errors->any())
			<div class="form-errors">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@yield('auth-content')
	</div>
@endsection

@section('custom-post-script')
@endsection