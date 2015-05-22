<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	
	protected $hidden = array('password', 'remember_token');


	protected $fillable = array('username', 'usermail', 'register', 'password','pictured');

	public function getAuthIsAdmin()
	{
		return $this->register;
	}

	public function getAuthPassword()
	{
		return $this->password;
	}


	public function user_imgs()
	{
		return $this->hasMany('Imgs', 'user_id');
	}
	
}
