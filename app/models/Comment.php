<?php
// file: app/models/Comment.php
class Comment extends Eloquent {
 
 	protected $table = 'comments';
 	protected $fillable = [
 		'post_id',
 		'commenter',
 		'comment',
 		'approved'
 	];
    public function post()
    {
        return $this->belongsTo('Post');
    }
    public static $rules=array(
        "comment"=>"required"
    );
}