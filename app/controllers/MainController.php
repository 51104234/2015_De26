<?php
use App\Models;
class MainController extends BaseController {

	public function getMain()
	{
		$posts = Post::orderBy('id','desc')->paginate(6);
		return View::make('frontend.posts.main', compact('posts'));
	}

	public function getBlog()
	{
		$posts = Post::orderBy('id','desc')->paginate(6);
		return View::make('frontend.posts.blog', compact('posts'));
	}

	public function getAdmin()
	{
		return View::make('backend.admin.index');
	}
}
