 @extends('template')
	@section('content')
	<div class="row">
		<div class="twelve columns">
			<h4>Create a Package</h4>
		</div>
		{{Form::open(['url'	=> 'booking'])}}
		<div class="twelve columns">
			{{Form::label('title','Title')}}
		</div>
		<div class="twelve columns">
			{{Form::text('title',Input::old('title'))}}
		</div>
		<div class="twelve columns">
			{{Form::label('description','Description')}}
		</div>
		<div class="twelve columns">
			{{Form::text('description',Input::old('description'))}}
		</div>
		<div class="twelve columns">
			{{Form::label('price','Price')}}
		</div>
		<div class="twelve columns">
			{{Form::text('price',Input::old('price'))}}
		</div>
		<div class="twelve columns">
			{{Form::label('limit','Limit')}}
		</div>
		<div class="twelve columns">
			{{Form::text('limit',Input::old('price'))}}
		</div>
		<div class="twelve columns">
			{{Form::label('post_id','Post')}}
		</div>
		<div class="twelve columns">
			{{Form::select('post_id',$posts)}}
		</div>
		<div class="twelve columns">
			<button class = "button button-primary u-full-width" >Submit</button>
		</div>
		{{Form::close()}}
	</div>
	@stop