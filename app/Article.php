<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [];
    
    public function user(){
        return $this->hasOne('App\User');
    }

    public function article_info(){
        return $this->hasOne('App\Article_info');
    }

    public function category(){
    	return $this->hasMany('App\Category');
    }

    public function comments(){
    	return $this->hasMany('App\Comment');
    }

}
