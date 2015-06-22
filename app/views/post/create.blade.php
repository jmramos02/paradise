@extends('template')
	@section('content')
		<div class="row">
			{{Form::open(['url' => '/post','files' => true])}}
			<div class="twelve columns u-max-full-width">
				{{Form::label('title','Title')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::text('title',Input::old('title'),['placeholder' => 'Choose a catchy one!'])}}
			</div>

			<div class="twelve columns u-max-full-width">
				{{Form::label('content','Content')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::textarea('content',Input::old('title'),['placeholder' => '200 - 1000 Characters allowed'])}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::label('category','Category')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::select('category',['Historical Sites'=>'Historical Sites', 'Tourist Spots'=>'Tourist Spots', 'Resorts' => 'Resorts','Cafe\'s' => 'Cafe\'s' ,'Etc..' => 'Etc..'])}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::label('type','Type')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::select('type',['0' => 'Non Booking','1' => 'Booking'])}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::label('image','Image (must be less than 2mb)')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::file('image')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::label('location','Location')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::text('location',Input::old('location'))}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::label('contact_number','Contact Number')}}
			</div>
			<div class="twelve columns u-max-full-width">
				{{Form::text('contact_number',Input::old('contact_number'))}}
			</div>
			<div class="twelve columns u-max-full-width">
				<button class = "button-primary u-full-width">Submit</button>
			</div>
			{{Form::close()}}
		</div>
	@stop