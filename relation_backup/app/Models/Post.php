<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){

         return $this->belongsTo(Category::class);

       // or

      //  return $this->belongsTo('App\Models\Category');     //Post table belongs to category_id that's why we will use belongsTo function
    }
}
