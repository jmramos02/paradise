@extends('template')
	@section('content')
	<div class="row">
		<div class="twelve columns u-max-full-width">
			{{HTML::image('/uploads/' . $post->image,'image',['class' => 'header-img'])}}
			<h4>{{$post->title}}</h4>
			<h6>By: {{$post->user->nickname}} 
			<small><i>{{date('F j, Y',strtotime($post->created_at))}}</i></small></h6>
			<p class = "content">{{$post->content}}</p>
			<p class = "content">Location: {{$post->location}}</p>
			<p class = "content">Contact Number: {{$post->contact_number}}</p>
			<h4>Comments</h4>
			@if(count($comments) == 0)
				<div class = "content">No comments yet</div>
			@else
				@foreach($comments as $comment)
					<h6 class = "header-comment">{{$comment->user->nickname}}</h6>
					<p class = "comment">{{$comment->comment}}</p>
					<p class = "comment">{{date('F j, Y',strtotime($comment->created_at))}}</p>
				@endforeach
				{{$comments->links()}}
			@endif
			<br>
			@if(!is_null(Auth::user()))
			   {{Form::open(['url' => '/comment/' . $post->id . '/add'])}}
					{{Form::label('comment','Add a comment')}}
					{{Form::textarea('comment')}}
					<button class = "button-primary u-full-width">Submit</button>
				{{Form::close()}}
			@else
				<p class = "content">Click {{HTML::link('/login','here',['class' => 'link-color'])}} to login </p>
			@endif
		</div>
	</div>
	@if(count($packages) != 0)
	<div class="row">
		<h4>Book Now! </h4>
		@foreach($packages as $package)
			<div class="twelve columns">
				Package: {{$package->title}}
				<p>{{$package->description}}</p>
				Price: {{$package->price}}
				{{HTML::link('/book/' . $package->id,'Book Package ' . $package->title . ' Now!', ['class' => 'button button-primary u-max-full-width u-full-width'])}}
			</div>
		@endforeach
	</div>
	@endif

	@stop