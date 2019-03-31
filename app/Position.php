<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
	* Get all of the posts that are assigned this position
	*/
    public function posts(){
    	return $this->morphedByMany('App\Post', 'positioned');
    }

    /**
	* Get all of the poetry that are assigned this position
	*/
    public function poetries(){
    	return $this->morphedByMany('App\Poetry', 'positioned');
    }

    /**
	* Get all of the galleries that are assigned this position
	*/
    public function galleries(){
    	return $this->morphedByMany('App\Gallery', 'positioned');
    }

    /**
	* Get all of the videos that are assigned this position
	*/
    public function videos(){
    	return $this->morphedByMany('App\Video', 'positioned');
    }
    
}
