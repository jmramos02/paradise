@extends('template')

	@section('content')
	<h4>Login</h4>
	<div class="row">
		{{Form::open(['url' => 'login'])}}
		<div class="twelve column">
			{{Form::label('email','Email')}}
		</div>
		<div class="twelve column">
			{{Form::text('email')}}
		</div>
		<div class="twelve column">
			{{Form::label('password','Password')}}
		</div>
		<div class="twelve column">
			{{Form::password('password')}}
		</div>
		<div class="twelve columns">
			{{Form::checkbox('remember')}} <span class = "remember">Remember me?</span>
		</div>
		<div class = "twelve columns">
			<button class = "button-primary u-full-width">Login</button>
		</div>
		{{Form::close()}}
	</div>
	@stop