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
        return $this ->morphOne(Image::class, 'imageable' );

    }
}
