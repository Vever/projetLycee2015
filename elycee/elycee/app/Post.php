<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = [
		'title',
		'abstract',
		'content',
		'url_thumbnail',
		'user_id',
		'status',
	];

	/**
	* Retrieves the user associated with the post.
    *
    * @return \Illuminate\Database\Relation\BelongsTo
    */
	public function user_id(){
		return $this->belongsTo('App\User');
	}

}