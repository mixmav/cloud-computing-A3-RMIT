
@extends('layout.master')

@section('custom-head')
	<link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">
@endsection

@section('content')
	<div id="app"></div>
@endsection

@section('custom-post-script')
	<script src="{{ mix('/js/app.js') }}"></script>
@endsection