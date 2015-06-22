<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$posts = Post::with('user')->orderBy('updated_at','desc')->take(3)->get();
		return View::make('index',compact('posts'));
	}

	public function login()
	{
		if(Auth::check()) {
			return Redirect::to('/');
		}
		$rules = [
				'email'	=>	'required',
				'password'	=>	'required'
			];

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()) {

			return Redirect::to('/')->withErrors($validator);
		
		} else {

			$email = Input::get('email');
			$password = Input::get('password');
			$remember = Input::get('remember');

			if(Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
				return Redirect::to('/');
			} else {
				Session::flash('message','Username or Password is incorrect');
				return Redirect::to('/');
			}

		}
	}

	public function register() 
	{

		if(Auth::check()) {
			return Redirect::to('/');
		}

		$rules = [
				'email'					=>	'required|email|unique:users',
				'password'				=>	'required|confirmed',
				'password_confirmation'	=>	'required',
				'nickname'				=>	'required|unique:users',
				'firstname'				=>	'required',
				'lastname'				=>	'required',
			];

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()) {
			return Redirect::to('register')->withErrors($validator);
		} else {
			User::create([
					'email'		=>	Input::get('email'),
					'password'	=>	Hash::make(Input::get('password')),
					'nickname'	=>	Input::get('nickname'),
					'firstname'	=>	Input::get('firstname'),
					'lastname'	=>	Input::get('lastname'),
					'role'		=>	1
				]);

			if(Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password																																																																																																																																																																															')], true)) {
				return Redirect::to('/')->with('message','Registration Successful');
			} else {
				Session::flash('message','Username or Password is incorrect');
				return Redirect::to('/');
			}
		}
	}

	public function showRegister()
	{
		return View::make('register');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function historical()
	{
		$posts = Post::where('category','Historical Sites')->paginate(3);
		return View::make('search',compact('posts'));
	}

	public function tourist()
	{
		$posts = Post::where('category','Tourist Spots')->paginate(3);
		return View::make('search',compact('posts'));
	}

	public function cafe()
	{
		$posts = Post::where('category','Cafe\'s')->paginate(3);
		return View::make('search',compact('posts'));
	}

	public function resorts()
	{
		$posts = Post::where('category','Resorts')->paginate(3);
		return View::make('search',compact('posts'));

	}

	public function etc()
	{
		$posts = Post::where('category','Etc..')->paginate(3);
		return View::make('search',compact('posts'));

	}

	public function showCategories()
	{
		return View::make('category');
	}

	public function search()
	{
		$search = Input::get('search');
		$posts = Post::where('title','LIKE',"%$search%")->orderBy('updated_at','desc')->paginate(3);
		return View::make('search',compact('posts'));
	}
}
