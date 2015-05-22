	<?php

class CategoriesController extends BaseController {


	public function getIndex(){
		$categories = Categories::paginate(4);
		return View::make('backend.categories.index', compact('categories'));
	}

	public function getCreate(){
		return View::make('backend.categories.create');
	}

	public function postCreate(){
		$input=Input::all();
		$validation=  Validator::make($input, Categories::$rules);
		if($validation->passes()){
	    	$categories = new Categories();
	    	$categories->id = Input::get('id');
	    	$categories->categories = Input::get('categories');
	    	$categories->save();
	    	return Redirect::to('admin/categories');
	    }
		
	}

	public function getEdit($id){
		$categories = Categories::find($id);
		return View::make('backend.categories.edit',compact('categories'));
	}

	public function postEdit($id){
		$input=Input::all();
		$validation=  Validator::make($input, Categories::$rules);
		if($validation->passes()){
	    	$categories = Categories::find($id);
	    	var_dump('Stop_here');
	    	$categories->update([ 'categories' => Input::get('categories')
	    	]);
	    	return Redirect::to('admin/categories');
	    }
	    else{
	    	$categories = Categories::find($id);
			$categories->update([ 'categories' => Input::get('categories')
	    	]);
	    	return Redirect::to('admin/categories');
	    }
		
	}

	public function destroy($id){
		$categories = Categories::find($id);
		$categories->delete();
		return Redirect::to('admin/categories');
	}
}
