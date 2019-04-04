<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        'tag'
    ];

    /**
    * Get all of the images that are assigned this tag
    */
    public function images(){
        return $this->morphedByMany('App\Image', 'taggable');
    }

    /**
	* Get all of the posts that are assigned this tag
	*/
    public function posts(){
    	return $this->morphedByMany('App\Post', 'taggable');
    }

    /**
	* Get all of the poetry that are assigned this tag
	*/
    public function poetries(){
    	return $this->morphedByMany('App\Poetry', 'taggable');
    }

    /**
	* Get all of the galleries that are assigned this tag
	*/
    public function galleries(){
    	return $this->morphedByMany('App\Gallery', 'taggable');
    }

    /**
	* Get all of the videos that are assigned this tag
	*/
    public function videos(){
    	return $this->morphedByMany('App\Video', 'taggable');
    }
}
