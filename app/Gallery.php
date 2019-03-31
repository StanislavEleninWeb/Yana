<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    
    /**
     * Get all of the tags for the post.
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    /**
     * Get all of the images for the post.
     */
    public function images()
    {
        return $this->morphToMany('App\Image', 'imaged');
    }

    /**
     * Get all of the categories for the post.
     */
    public function categories()
    {
        return $this->morphToMany('App\Category', 'categorized');
    }

    /**
     * Get all of the categories for the post.
     */
    public function positions()
    {
        return $this->morphToMany('App\Position', 'positioned');
    }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    
}
