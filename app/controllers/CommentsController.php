<?php

class CommentsController extends BaseController {

	public function __construct(){
    	$this->beforeFilter('check-admin');
	}

	public function getIndex(){
		$comments = Comment::paginate(4);
		return View::make('backend.comments.index', compact('comments'));
	}

	public function destroy($id){
		$comments = Comment::find($id);
		DB::table('posts')->where('id',$comments->post_id)->decrement('comment_count');
		$comments->delete();

		return Redirect::to('admin/comments');
	}

}
