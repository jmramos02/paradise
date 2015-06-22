<?php

class PostController extends BaseController {

	public function showPosts()
	{
		$id = Auth::id();
		$posts = Post::where('author_id',$id)->orderBy('created_at','desc')->paginate(3);
		return View::make('post.index',compact('posts'));
	}

	public function showAddPost()
	{
		return View::make('post.create');
	}

	public function store()
	{
		$rules = [
				'title'		=>	'required',
				'content'	=> 'required|min:200| max:1000',
				'image'		=> 'required|image|max:1000|mimes:jpeg,png',
				'location'	=>	'required',
				'contact_number'	=>	'required'
			];
		$validator = Validator::make(Input::all(),$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			$photo = Input::file('image');
			$extension = $photo->getClientOriginalExtension();
			$filename = substr(md5(microtime()),rand(0,26),8) . '.' . $extension;
				//check if file is valid
			if($photo->isValid()) {
				//move photo
				$photo->move(public_path() .'/uploads',$filename);
				$title = Input::get('title');
				$content = Input::get('content');
				$type = Input::get('type');
				$location = Input::get('location');
				$contact_number = Input::get('contact_number');

				$post = new Post();
				$post->author_id = Auth::id();
				$post->title = $title;
				$post->content = $content;
				$post->location = $location;
				$post->contact_number = $contact_number;
				$post->status = 1;
				$post->type = 0;
				$post->image = $filename;
				$post->save();
				Session::flash('message','Article Posted');
				return Redirect::to('/post');

			} else {
				return 'Invalid File';
			}
		}
	}

	public function show($id)
	{
		$post = Post::find($id);
		$comments = Comment::where('post_id', $post->id)->paginate(5);
		$packages = Package::where('post_id',$post->id)->get();
		return View::make('post.show',compact('post','comments','packages'));
	}
}