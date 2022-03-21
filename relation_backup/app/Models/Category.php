<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post(){

        //return $this -> hasOne(Post::class, 'category_id','id');         //Single data show in array

      //  return $this -> hasMany('App\Models\Post', 'category_id','id');

     // or
     return $this -> hasMany(Post::class, 'category_id','id');

    }


}
