@extends('template')
	@section('content')
	<div class="row">
		<div class="twelve">
			<div class="twelve columns">
				<a class = "button button-primary u-full-width" href = "/post/create">Post an Article</a>
				{{$posts->links()}}	
			</div>
		</div>
		<div class="twelve columns u-max-full-width">
			<h4>Your Posts</h4>
		</div>
		@if(count($posts) == 0)
			<div class="twelve columns u-max-full-width">
				<h6>No posts to show</h6>
			</div>
		@else
			@foreach($posts as $post)
			<div class="twelve columns u-max-full-width">
				<h4>{{$post->title}}</h4>
				<p class = "content">{{HTML::entities(substr($post->content,0,120))}}... {{HTML::link('/post/' . $post->id . '/view','View',['class' => 'see-more'])}}
				</p>
			</div>
			@endforeach
		@endif
	</div>
	@stop