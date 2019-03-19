<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Article extends Model
{
    protected $fillable = [];
    
    public function user(){
        return $this->hasOne('App\User');
    }

    public function article_info(){
        return $this->hasOne('App\Article_info');
    }

}
