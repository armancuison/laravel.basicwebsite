@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur vero voluptates ad repellendus porro nisi in neque, sunt, minima accusantium, dolore rem aut! Ducimus rem impedit delectus, quaerat, quidem neque.</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection