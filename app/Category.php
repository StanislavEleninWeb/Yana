<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
	/**
	* Get all of the posts that are assigned this category
	*/
    public function posts(){
    	return $this->morphedByMany('App\Post', 'categorized');
    }

    /**
	* Get all of the poetry that are assigned this category
	*/
    public function poetries(){
    	return $this->morphedByMany('App\Poetry', 'categorized');
    }

    /**
	* Get all of the galleries that are assigned this category
	*/
    public function galleries(){
    	return $this->morphedByMany('App\Gallery', 'categorized');
    }

    /**
	* Get all of the videos that are assigned this category
	*/
    public function videos(){
    	return $this->morphedByMany('App\Video', 'categorized');
    }

}
