<?php

class PostsController extends BaseController {


	public function getIndex(){
		$posts = Post::paginate(4);
		return View::make('backend.posts.index', compact('posts'));
	}

	public function destroy($id){
		$posts = Post::find($id);
		$comment = Comment::where('post_id',$id)->first();
		DB::table('comments')->where('post_id', $id)->delete();
		$posts->delete();

		return Redirect::to('admin/posts');
	}

}

