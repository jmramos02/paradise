<?php

class CommentController extends BaseController {
	
	public function store($id)
	{
		//validate this piece of shit

		$rules = [
				'comment' => 'required'
			];

		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails())	{
			return Redirect::back()->withErrors($validator);
		} else {
			//get id of user;
			$user_id = Auth::id();
			$comment = new Comment();
			$comment->post_id = $id;
			$comment->user_id = $user_id;
			$comment->comment = Input::get('comment');
			$comment->save();

			Session::flash('message','Comment Added');
			return Redirect::back();
		}
	}
}