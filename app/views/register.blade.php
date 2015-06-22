@extends('template')

	@section('content')
	<h4>Register</h4>
	<div class="row">
		{{Form::open(['url' => 'register'])}}
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
		<div class="twelve column">
			{{Form::label('password_confirmation','Confirm Password')}}
		</div>
		<div class="twelve column">
			{{Form::password('password_confirmation')}}
		</div>
		<div class="twelve column">
			{{Form::label('firstname','First Name')}}
		</div>
		<div class="twelve column">
			{{Form::text('firstname',Input::old('firstname'))}}
		</div>
		<div class="twelve column">
			{{Form::label('lastname','Last Name')}}
		</div>
		<div class="twelve column">
			{{Form::text('lastname',Input::old('lastname'))}}
		</div>
		<div class="twelve column">
			{{Form::label('nickname','Nickname')}}
		</div>
		<div class="twelve column">
			{{Form::text('nickname',Input::old('nickname'))}}
		</div>
		<div class = "twelve columns">
			<button class = "button-primary u-full-width">Register</button>
		</div>
		{{Form::close()}}
	</div>
	@stop