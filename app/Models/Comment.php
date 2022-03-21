<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];


/*
 * Get Post
 * Comment table contains post_id so relation will be belognsTo()
 * note : post_id has been kept inside comments table that's why belongsTo()
 * one comment can have under one post
 * (inverse relationship with Comment)
 */

/*
 * Get Post
 */

//We have passed post_model_id in comments table that's why we have to use belongsTo() function

public function post(){

    return $this->belongsTo('App\Models\PostModel');

}


// We have passed user_id in comments table that's why we have to use belongsTo() function
public function user(){
    return $this->belongsTo('App\Models\User');
}


}