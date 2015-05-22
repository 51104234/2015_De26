<?php 

class PagesController extends BaseController
{
    public function show($id) {
    	$post = Post::find($id);
    	return View::make('frontend.posts.post', compact('post'));
    }
    public function create() {
    	return View::make('frontend.posts.create');
    }
    public function postAddPost() {
		$input=Input::all();
		$validation=  Validator::make($input, Post::$rules);
		if($validation->passes()){
			$image=Input::file('image');
			$imageName=$image->getClientOriginalName();
			$nameArray=explode('.', $imageName);
			$imageType= end($nameArray);
			$imageRules=array("jpg","jpeg","png");
		if(in_array($imageType, $imageRules)){ //neu dung thi tien hanh insert vao csdl
			$imageNewName=  uniqid(rand(), true);
			$imageNewName=md5($imageNewName);
			$imageNewName=  substr($imageNewName, 0, 6);
			$imageNewName.=".".$imageType;
			Input::file('image')->move('includes/images/', $imageNewName); // upload hinh anh

			//sau khi upload thi insert vao csdl
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date=new DateTime();
			
			$post = new Post();
			$post->title =  Input::get('title');
			$post->content =Input::get('content');
			$read_more = substr($post->content, 0, 100);
			$post->read_more = $read_more;
			$post->image = $imageNewName;
			$post->author = Auth::user()->username;
			$post->categories_id = Input::get('categories');
			//$post->create_date = $date->format("Y-m-d");
			$post->save();
			// luu
			return Redirect::to('blog');

		}else{
			return Redirect::to('post/create')
			     ->with('errorImage', "Không đúng định dạng hình ảnh");
		}

		}else{
			return Redirect::to('post/create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
		}
    }
    public function comment() {
    	$input=Input::all();
		$validation=  Validator::make($input, Comment::$rules);
		if($validation->passes()){
	    	$comment = new Comment();
	    	$comment->post_id = Input::get('post_id');
	    	$comment->commenter = Auth::user()->username;
	    	$comment->comment = Input::get('comment');
	    	$comment->approved = 1;
	    	$comment->save();

	    	DB::table('posts')->where('id',$comment->post_id)->increment('comment_count');
	    	return Redirect::back();
	    }
	    else {
	    	return Redirect::back()->with('errorComment', "Comment Failed");
	    }
    }
    public function showCategories($id) {
    	$categories = Post::where('categories_id','=',$id)->paginate(3);
    	return View::make('frontend.posts.categories', compact('categories'));
	}
}