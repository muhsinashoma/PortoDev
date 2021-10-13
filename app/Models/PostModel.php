<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    //multiple image for one post -->morphMany
    public function image(){
        return $this->morphMany(Image::class, 'imageable');
    }

    //Multiple cagtegories can have under one post
    public function categories(){
       return  $this ->belongsToMany('App\Models\Category');
    }

    //Multiple tags can have under one post
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

}
