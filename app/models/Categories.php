<?php
// file: app/models/Categories.php
class Categories extends Eloquent {
 	
 	protected $table = 'categories';
 	protected $fillable = [
 		'id',
 		'categories'
 	];
    public function post()
    {
        return $this->hasMany('Post');
    }
    public static $rules=array(
        "id" => "required",
        "categories" => "required"
    );
}