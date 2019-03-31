<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    /**
	* Get all of the posts that are assigned this image
	*/
    public function posts(){
    	return $this->morphedByMany('App\Post', 'imaged');
    }

    /**
	* Get all of the poetry that are assigned this image
	*/
    public function poetries(){
    	return $this->morphedByMany('App\Poetry', 'imaged');
    }

    /**
	* Get all of the galleries that are assigned this image
	*/
    public function galleries(){
    	return $this->morphedByMany('App\Gallery', 'imaged');
    }

    /**
	* Get all of the videos that are assigned this image
	*/
    public function videos(){
    	return $this->morphedByMany('App\Video', 'imaged');
    }

}
