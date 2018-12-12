<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title','description','avatar','slug'];
    // protected $table = 'posts';
    public function getRouteKeyName(){
    	return 'slug';
    }
}
