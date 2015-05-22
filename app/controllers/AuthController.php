<?php

class AuthController extends BaseController {

	public function getLogout()
	{
		Auth::logout();
		return Redirect::back();
	}

	public function getProfile()
	{
		return View::make('frontend.users.profile');
	}

	public function postProfile()
	{
		$rules = array('pictured' => 'required|image|mimes:jpg,jpeg,png,bmp,gif');
		$validator = Validator::make(Input::all(), $rules);
		$userdata = User::find(Auth::id());
		var_dump($userdata->pictured);
		if($validator->fails())
		{
			//return Redirect::route('get-profile')->withErrors($validator)->withInput();
			return Response::json(Input::all());
		}
		else
		{
			$userdata = User::find(Auth::id());
			var_dump($userdata);
			$pictured = Input::file('pictured');
			$filename = Str::upper(Str::random(20).'ID'.Auth::id().'.'.$pictured->getClientOriginalExtension());
			$thumbPath = 'public/uploads/users/thumb/'.Auth::id().'/';
			$albumPath = 'public/uploads/users/album/'.Auth::id().'/';
			if($userdata->pictured) {
				File::delete($thumbPath.$userdata->pictured);
				File::delete($albumPath.$userdata->pictured);
			}
			$userdata->pictured = $filename;
			if($userdata->save())
			{
				Image::make($pictured->getRealPath())->resize(150, 150)->save($thumbPath.$filename);
				Image::make($pictured->getRealPath())->resize(750, 450)->save($albumPath.$filename);
				return Response::make(Auth::id().'/'.$filename);
			}
		}
	}
	
}