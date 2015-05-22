<?php
// file: app/models/Post.php

class Post extends Eloquent {

	protected $table = 'posts';

 	protected $fillable = [
 		'title',
 		'content',
 		'read_more',
 		'image',
 		'categories_id'
 		
 	];
    public function comments()
    {
        return $this->hasMany('Comment');
    }
    public function categories()
    {
        return $this->belongsTo('Categories');
    }
 	public static $rules=array(
        "title"=>"required",
        "content"=>"required",
        "image"=>"required",
        "categories" =>"required|numeric"
    );
}