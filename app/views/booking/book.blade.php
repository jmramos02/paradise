 @extends('template')
	@section('content')
	<div class="row">
		<div class="twelve columns">
			<h4>Booking Details: </h4>
			<div class = "content">Package: {{$package->title}}</div>
			<div class = "content">Description: {{$package->description}}</div>
			<div class = "content">Price per Head: {{$package->price}}</div>
		</div>
		{{Form::open(['url'	=> '/book/' . $package->id])}}
		<div class="twelve columns">
			{{Form::label('quantity','Quantity (Head Count)')}}
		</div>
		<div class="twelve columns">
			{{Form::text('quantity',Input::old('quantity'))}}
		</div>
		<div class="twelve columns">
			{{Form::label('contact_number','Contact Number')}}
		</div>
		<div class="twelve columns">
			{{Form::text('contact_number',Input::old('contact_number'),['placeholder' => 'We will use this to contact you!'])}}
		</div>
		<div class="twelve columns">
			{{Form::label('day','Day')}}
		</div>
		<div class="twelve columns">
			{{Form::select('day',$days)}}
		</div>
		<div class="twelve columns">
			{{Form::label('month','Month')}}
		</div>
		<div class="twelve columns">
			{{Form::select('month',$months)}}
		</div>
		<div class="twelve columns">
			<button class = "button-primary u-full-width">Book</button>
		</div>
		{{Form::close()}}
	</div>
	@stop