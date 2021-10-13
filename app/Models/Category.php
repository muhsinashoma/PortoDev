<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function image(){
        //one image for one post -->morphOne
        //return $this ->morphOne(Image::class, 'imageable' );


        //multiple image for one post -->morphMany
        return $this ->morphMany(Image::class, 'imageable');

    }


    //Multiple sub-cagtegories can have under one category
    public function subcategories(){
        return $this ->belongsToMany('App\Models\Subcategory');
    }



}
