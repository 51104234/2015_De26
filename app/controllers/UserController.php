<?php

class UserController extends BaseController {


	/* ++++++++ GET ++++++++ */
	public function getSignup()
	{
		return View::make('frontend.users.signup');
	}

	public function getSignin()
	{
		return View::make('frontend.users.signin');
	}

	/* ++++++++ POST ++++++++ */
	public function postSignup()
	{
		$rules = array(
			'usermail' => 'required|email|max:80|unique:users',		
			'username' => 'required|min:3|max:16|unique:users|regex:/^([A-Za-z0-9])+$/i',
			'password' => 'required|min:6|max:32',
			'passgain' => 'required|same:password'
		);

		$error = array(
			'username.min'		=> 'Tên tài khoản ít nhất 3 ký tự.',
			'password.min'		=> 'Mật khẩu phải ít nhất 6 ký tự.',
			'usermail.max'		=> 'Địa chỉ email không quá 80 ký tự.',
			'username.max'		=> 'Tên tài khoản không quá 16 ký tự.',
			'password.max'		=> 'Mật khẩu không vượt quá 32 ký tự.',
			'usermail.required' => 'Bạn không được để trống trường này.',
			'username.required' => 'Bạn không được để trống trường này.',
			'password.required' => 'Bạn không được để trống trường này.',
			'passgain.required' => 'Bạn không được để trống trường này.',
			'usermail.email'	=> 'Địa chỉ email không đúng định dạng.',
			'username.regex'	=> 'Tên tài khoản không ký tự đặc biệt.',
			'usermail.unique'	=> 'Địa chỉ email đã được sử dụng.',
			'username.unique'	=> 'Tên tài khoản đã được sử dụng.',
			'passgain.same'		=> 'Mật khẩu xác nhận không đúng.',
		);

		$validator = Validator::make(Input::all(), $rules, $error);

		if($validator->fails())
		{
			return Redirect::route('get-signup')->withErrors($validator)->withInput();
		}
		else
		{
			$usermail = Input::get('usermail');
			$username = Str::lower(Input::get('username'));
			$password = Hash::make(Input::get('password'));
			$userdata = User::create(array(
				'username' => $username,
				'usermail' => $usermail,
				'password' => $password,
				'register' => 'register',
			));
			if($userdata)
			{
				return Redirect::route('get-signin')->with('messageOk', 'Tài khoản <strong>'.$username.'</strong> đã được đăng ký thành công.');
			}
		}
	}

	public function postSignin()
	{
		$rules = array(
			'username' => 'required|min:3',
			'password' => 'required|min:6',
		);
		$error = array(
			'username.min'		=> 'Tên tài khoản có ít nhất 3 ký tự.',
			'password.min'		=> 'Mật khẩu phải có ít nhất 6 ký tự.',
			'username.required' => 'Bạn không được để trống trường này.',
			'password.required' => 'Bạn không được để trống trường này.',
		);
		$validator = Validator::make(Input::all(), $rules, $error);

		if( $validator->fails() )
		{
			return Redirect::route('get-signin')->withErrors($validator)->withInput();
		}
		else
		{
			$userdata = array(
				'username' => Input::get('username'),
				'password' => Input::get('password'),
			);
			$remember = Input::has('remember') ? true : false;

			$authdata = Auth::attempt($userdata, $remember);

			if($authdata)
			{
				return Redirect::intended('/');
			}
			else
			{
				return Redirect::route('get-signin')->with('messageNo', 'Tên tài khoản hoặc mật khẩu không đúng.');
			}
		}
		return Redirect::route('get-signin')->with('messageNo', 'Đăng nhập không thành công.');
	}

}
