@extends('template')

	@section('content')
	<!-- Loop the divs jm.-->
	<div class="row">
		<div class="twelve columns">
			<a class = "button button-primary u-full-width" href = "/search/historical">Historical Sites</a>
		</div>
		<div class="twelve columns">
			<a class = "button button-primary u-full-width" href = "/search/cafe">Cafe's</a>
		</div>
		<div class="twelve columns">
			<a class = "button button-primary u-full-width" href = "/search/resorts">Resorts</a>
		</div>
		<div class="twelve columns">
			<a class = "button button-primary u-full-width" href = "/search/tourists">Tourist Spots</a>
		</div>
		<div class="twelve columns">
			<a class = "button button-primary u-full-width" href = "/search/etc">Etc..</a>
		</div>
	</div>
	@stop