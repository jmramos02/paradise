<?php

class Post extends Eloquent{

	protected $fillable = ['author_id','title','content','status','type,image'];	

	public function user()
	{
		return $this->belongsTo('User','author_id');
	}
}