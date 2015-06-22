<?php

use Carbon\Carbon;

class BookingController extends BaseController{
	
	public function showBooking()
	{
		$bookings = Booking::where('author_id',Auth::id())->orderBy('created_at','desc')->paginate(3);
		return View::make('booking.index',compact('bookings'));
	}

	public function create()
	{
		$posts = Post::where('type',1)->lists('title', 'id');
		return View::make('booking.create',compact('posts'));
	}

	public function store()
	{
		$rules = [
			'title'			=>	'required',
			'description'	=>	'required',
			'price'			=>	'required|numeric',
			'limit'			=>	'required|integer|min:1',
			'post_id'		=>	'required'
		];

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {

			$title = Input::get('title');
			$description = Input::get('description');
			$price = Input::get('price');
			$limit = Input::get('limit');
			$post_id = Input::get('post_id');

			$package = new Package();
			$package->title =  $title;
			$package->description = $description;
			$package->price = $price;
			$package->limit = $limit;
			$package->post_id = $post_id;

			$package->save();

			Session::flash('message','Package Created');
			return Redirect::to('/booking');
		}
	}

	public function showBookingForm($id)
	{
		$package = Package::find($id);
		$current_year = date('Y');
		//Code below is really stupid
		$days = [
			"01"	=>	'01',
			"02"	=>	'02',
			"03"	=>	'03',
			"04"	=>	'04',
			"05"	=>	'05',
			"06"	=>	'06',
			"07"	=>	'07',
			"08"	=>	'08',
			"09"	=>	'09',
			"10"	=>	'10',
			"11"	=>	'11',
			"12"	=>	'12',
			"13"	=>	"13",
			"14"	=>	"14",
			"15"	=>	"15",
			"16"	=>	"16",
			"17"	=>	"17",
			"18"	=>	"18",
			"19"	=>	"19",
			"20"	=>	"20",
			"21"	=>	"21",
			"22"	=>	"22",
			"23"	=>	"23",
			"24"	=>	"24",
			"25"	=>	"25",
			"26"	=>	"26",
			"27"	=>	"27",
			"28"	=>	"28",
			"29"	=>	"29",
			"30"	=>	"30",
			"31"	=>	"31"
		];
		$months = [
			"01"	=>	'January',
			"02"	=>	'February',
			"03"	=>	'March',
			"04"	=>	'April',
			"05"	=>	'May',
			"06"	=>	'June',
			"07"	=>	'July',
			"08"	=>	'August',
			"09"	=>	'September',
			"10"	=>	'October',
			"11"	=>	'November',
			"12"	=>	'December'
		];


		return View::make('booking.book',compact('package','months','days'));
	}

	public function book($id)
	{
		$rules = [
			'quantity'			=>	'required|integer',
			'contact_number'	=>	'required',
			'day'				=>	'required',
			'month'				=>	'required'
		];

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			
			$quantity = Input::get('quantity');
			$contact_number = Input::get('contact_number');
			$date = Input::get('day') . '-' . Input::get('month') . '-' .  date('Y');
			$package_id = $id;
			$package = Package::find($package_id);
			$post = Post::find($package->post_id);

			$booking = new Booking();
			$booking->quantity = $quantity;
			$booking->booking_date = Carbon::createFromFormat('d-m-Y',$date);
			$booking->status = 0;
			$booking->package_id = $package_id;
			$booking->contact_number = $contact_number;
			$booking->user_id = Auth::id();
			$booking->post_id = $package->post_id;
			$booking->author_id = $post->author_id;

			$booking->save();

			Session::flash('message','Booking request sent');
			return Redirect::to('/post/' . $package->post_id . '/view');
		}
	}
}