<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogPageController extends Controller
{
   public function blogPageController(){
       return view('admin.blog.index');
   }
}
