<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $guarded = [];


    //We will hit user table to take all information through post table. role_id have in post table as user_role that's means post table belongs to role_id that's why we have to use belongsTo

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

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


    /*
     * Get all comments : There are more comments  (inverse relationship with PostModel)
     */

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

}
