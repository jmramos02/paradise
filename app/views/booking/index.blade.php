@extends('template')
	@section('content')
	<div class="row">
		<div class="twelve columns">
			<a class = "button button-primary u-full-width" href = "/booking/create">Create a Package</a>
		</div>
	</div>
	<div class="row">
		@foreach($bookings as $book)
			<div class="twelve columns">
				{{$book->post()->first()->title}} <br>
				Contact Number: {{$book->contact_number}} <br>
				Quantity: {{$book->quantity}} <br>
				Reservation Date: {{date('F j, Y',strtotime($book->created_at))}} <br>
				Name : {{$book->user()->first()->firstname}} {{$book->user()->first()->lastname}} 
			</div>
		@endforeach	
	</div>
	{{$bookings->links()}}
	@stop