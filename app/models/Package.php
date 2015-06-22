<?php

class Package extends Eloquent {

	protected $table = "packages";

	public function booking()
	{
		return $this->hasMany('Booking');
	}

	public function post()
	{
		return $this->belongsTo('Post');
	}
}