<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Find your next destination - Paradise.ph</title>
	{{HTML::style('lib/normalize.css')}}
	{{HTML::style('lib/skeleton.css')}}
	{{HTML::style('css/style.css')}}
</head>
<body>
	<div class="container">
		<div class="row top-bar">
			<div class="twelve columns u-max-full-width logo-wrapper">
				{{HTML::image('img/loogo.png','Logo',['class' => 'logo'])}}
			</div>
			{{Form::open(['url' => '/search','method' => 'GET'])}}
			<div class="twelve columns search u-max-full-width">
				<input type="text" class = "u-max-full-width" name = "search" id = "search-box" placeholder = "Search using title">
			</div>
			<div class = "twelve columns u-max-full-width search">
				<button class = "button-primary search-button">Search</button>
			</div>
			{{Form::close()}}
		</div>
		<!--Nav-->

		<div class="row">
			<div class="twelve columns navigation">
				<ul>
					<li>{{HTML::link('/','Home')}}</li>
					<li>{{HTML::link('/categories','Categories')}}</li>
					@if(is_null(Auth::user()))
						<li>{{HTML::link('/login','Login')}}</li>
						<li>{{HTML::link('/register','Register')}}</li>
					@else
						<li>{{HTML::link('/post','Manage Posts')}}</li>
						<li>{{HTML::link('/booking','Manage Bookings')}}</li>
					@endif
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="twelve">
				@if(!is_null(Auth::user()))
					<div class = "remember">Hello! {{Auth::user()->nickname}} ({{HTML::link('/logout','Logout')}}) </div>
				@endif
			</div>
		</div>
		@if($errors->has())
			<div class="row">
				<div class="error-box twelve columns">
					@foreach ($errors->all() as $error)
			     		 <div class = "error">{{ $error }}</div>
			 		@endforeach
				</div>
			</div>
		@endif

		@if(Session::has('message'))
			<div class="row">
				<div class="notification-box twelve columns">
					<div class="notification">{{Session::get('message')}}</div>
				</div>
			</div>
		@endif

		@yield('content')

		<div class="row out">
			<div class="twelve columns footer u-max-full-width">
				<ul>
					<li>About Us</li>
					<li>&copy; Copyright 2015</li>
					<li><a href="/contactus" style="color:white;">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
