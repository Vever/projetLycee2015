<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model {

	protected $fillable = [
		'title',
		'class_level',
		'status',
	];

	/**
	* Retrieves the user associated with the post.
    *
    * @return \Illuminate\Database\Relation\BelongsTo
    */
	public function user(){
		return $this->belongsTo('App\User');
	}

	/**
     * Retreives all of the posts assoicated with the user.
     * 
     * @return \Illuminate\Database\Relations\HasMany
     */
    public function question()
    {
        return $this->hasMany('App\Question');
    }

}