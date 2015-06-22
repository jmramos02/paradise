@extends('template')

	@section('content')
	<!-- Loop the divs jm.-->
	<div class="row">
		<h4>Search Results</h4>
		@foreach($posts as $post)
		<div class="twelve columns u-max-full-width">
			{{HTML::image('uploads/' . $post->image,'',['class' => 'header-img'])}}
			<h4>{{$post->title}}</h4>
			<h6>By: {{$post->user->nickname}}</h6>
			<p>{{substr($post->content,0,120)}}... {{HTML::link('/post/' . $post->id . '/view','See more',['class' => 'see-more'])}}
			</p>
		</div>
		@endforeach
	</div>
	@stop