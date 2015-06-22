@extends('template')

	@section('content')
	<!-- Loop the divs jm.-->
	<div class="row">
		@foreach($posts as $post)
		<div class="twelve columns u-max-full-width">
			<h4>{{$post->title}}</h4>
			<h6>By: {{$post->user->nickname}}</h6>
			<p class = "content">{{substr($post->content,0,120)}}... {{HTML::link('/post/' . $post->id . '/view','See more',['class' => 'see-more'])}}
			</p>
		</div>
		@endforeach
	</div>
	@stop