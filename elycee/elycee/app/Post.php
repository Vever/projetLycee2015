<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = [
		'title',
		'abstract',
		'content',
		'url_thumbnail',
		'status',
	];

	public function post(){
		$posts = Post::orderBy('created_at')->get();
		return $this->belongsTo('App\Category');
	}

}