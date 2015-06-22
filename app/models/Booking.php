<?php

class Booking extends Eloquent {

	protected $table = 'bookings';

	public function package()
	{
		return $this->belongsTo('Package');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function post()
	{
		return $this->belongsTo('Post');
	}
}