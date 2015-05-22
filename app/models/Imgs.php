<?php

class Imgs extends Eloquent {
	
	protected $table = 'image';

	protected $fillable = array('imgthumb', 'imgalbum', 'user_id');

	public function imgs_user()
	{
		$this->belongsTo('User', 'user_id');
	} 
}