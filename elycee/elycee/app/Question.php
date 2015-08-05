<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	protected $fillable = [
        'content',
		'fiche_id',
        'reponse'
	];

	/**
	* Retrieves the user associated with the post.
    *
    * @return \Illuminate\Database\Relation\BelongsTo
    */
	public function fiche(){
		return $this->belongsTo('App\Fiche');
	}

}